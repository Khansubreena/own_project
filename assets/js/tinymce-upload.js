tinymce.init({
	selector: "#blog-description",
	width: "100%",
	height: 300,
	plugins: "image code link textcolor lists",
	toolbar:
		"undo redo | styleselect | fontsizeselect | forecolor backcolor | bold italic | numlist bullist | alignleft aligncenter alignright alignjustify | outdent indent | link image",
	browser_spellcheck: true,
	menu: {
		file: {
			title: "File",
			items: "newdocument restoredraft | preview | print",
		},
		edit: {
			title: "Edit",
			items: "undo redo | cut copy paste | selectall | searchreplace",
		},
		view: {
			title: "View",
			items: "code | visualaid visualchars visualblocks | preview fullscreen",
		},
		insert: {
			title: "Insert",
			items:
				"image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime",
		},
		format: {
			title: "Format",
			items:
				"bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align | forecolor backcolor | removeformat",
		},
		tools: {
			title: "Tools",
			items: "code wordcount",
		},
		table: {
			title: "Table",
			items: "inserttable | cell row column | tableprops deletetable",
		},
		help: {
			title: "Help",
			items: "help",
		},
	},
	branding: false,
	mobile: {
		menubar: true,
	},
	// upload image functionality
	images_upload_url: "blogs/tinymce-upload",
	images_upload_handler: function (blobInfo, success, failure) {
		var xhr, formData;
		xhr = new XMLHttpRequest();
		xhr.withCredentials = false;
		xhr.open("POST", "blogs/tinymce-upload");
		xhr.onload = function () {
			var json;
			if (xhr.status != 200) {
				failure("HTTP Error: " + xhr.status);
				return;
			}
			json = JSON.parse(xhr.responseText);
			if (!json || typeof json.location != "string") {
				failure("Invalid JSON: " + xhr.responseText);
				return;
			}
			success(json.location);
		};
		formData = new FormData();
		formData.append("file", blobInfo.blob(), blobInfo.filename());
		xhr.send(formData);
	},
});
