<style>
    .valid-text {
        color: green;
    }

    .invalid-text {
        color: red;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Card Validation</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <style>
        .valid-text {
            color: green;
        }
    </style>
</head>

<body>
    <div class="text-center">
        <button id="manuBtn" class="btn btn-primary mt-3">Menu</button>
    </div>
    <div class="modal fade" id="giftCardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gift Card Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <label for="redeemNumberModal">Enter Redeem Number:</label>
                                <input type="text" id="redeemNumberModal" class="form-control">
                                <button id="redeemBtnModal" class="btn btn-primary mt-3 btn-sm">Redeem</button>
                            </div>
                        </div>
                    </div>
                    <hr style="width: 100%; margin-top: 20px; border-top: 2px solid #000;">
                    <form id="cardIdForm" action="<?php echo base_url(); ?>blog_tags/index" method="post"
                        class="package-refund-validate" enctype="multipart/form-data">
                        <input type="hidden" name="cardId" id="cardId" class="form-control" value="">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="balanceText">Balance:</label>
                                <input type="text" id="balanceText" name = "balance" class="valid-text"></input>
                            </div>
                            <div class="col-md-6" id="validText">
                                <!-- <label for="validText" class="valid-text">The card is valid</label> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="customerNumber">Enter Customer Number:</label>
                                <input type="text" id="customerNumber" name="customer" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                        <button type="submit" class="btn btn-primary"><i class="link-icon" data-feather="plus"></i> Submit </button>                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // js/main.js
        $(document).ready(function () {
            $("#manuBtn").on("click", function () {
                $("#giftCardModal").modal("show");
            });
            $("#validText").hide();

            $("#redeemNumberModal").on("blur", function () {
                const redeemNumberModal = $("#redeemNumberModal").val();
                redeemGiftCard(redeemNumberModal);
            });
            //    $("#redeemBtnModal").on("click", function () {
            function redeemGiftCard(redeemNumberModal) {
                const endpointURL = "https://etesting.space/wp-json/wc-pimwick/v1/pw-gift-cards";
                const basicAuth = btoa("ck_ad713bc399f8d63da81a3583057b3e7b3d0899d4:cs_ee0259074bde553ce2008e6e0cd3994f99da77d5");

                $.ajax({
                    type: "GET",
                    url: endpointURL + "?number=" + redeemNumberModal,
                    headers: {
                        Authorization: "Basic " + basicAuth,
                    },
                    success: function (response) {
                        const validTextLabel = $("#validText");

                        if (response != '') {
                            console.log(response);
                            alert("Redeem number validated");
                            const balanceText = response[0].balance !== null ? response[0].balance : "Nill";
                            // $("#balanceText").text(balanceText);

                                $('#cardIdForm').find('[name="balance"]').val(balanceText).end()
                            $("#giftCardModal").modal("show");

                            validTextLabel.text("The card is valid");
                            validTextLabel.addClass("valid-text");
                            validTextLabel.removeClass("invalid-text");
                            $("#validText").show();
                        } else {
                            validTextLabel.text("The card is not valid");
                            validTextLabel.addClass("invalid-text");
                            validTextLabel.removeClass("valid-text");
                            $("#validText").show();
                            alert("Redeem number does not exist");
                        }
                    },
                    error: function (error) {
                        console.error("Error check basic auth:", error);
                    },
                });
            }
            $("#redeemBtnModal").on("click", function () {
                const balanceText = $("#balanceText").val();
                const redeemNumberModal = $("#redeemNumberModal").val();
                UpdateGiftCard(redeemNumberModal);

            });
        
        });
        function UpdateGiftCard(redeemNumberModal) {
            const endpointURL = "https://etesting.space/wp-json/wc-pimwick/v1/pw-gift-cards";
            const basicAuth = btoa("ck_ad713bc399f8d63da81a3583057b3e7b3d0899d4:cs_ee0259074bde553ce2008e6e0cd3994f99da77d5");

            $.ajax({
                type: "GET",
                url: endpointURL + "?number=" + redeemNumberModal,
                headers: {
                    Authorization: "Basic " + basicAuth,
                },
                success: function (response) {
                    const validTextLabel = $("#validText");

                    if (response != '') {
                        console.log(response);
                        alert("Redeemed");
                        const balanceText = response[0].balance !== null ? response[0].balance : "Nill";
                        const number = response[0].number;
                        // $("#balanceText").text(balanceText);
                        $('#cardIdForm').find('[name="balance"]').val(balanceText).end()
                        // $("#cardId").text(number);
                        $('#cardIdForm').find('[name="cardId"]').val(number).end()

                        $("#validText").show();
                    } else {

                        alert("error in Redeeming");
                    }
                },
                error: function (error) {
                    console.error("Error check basic auth:", error);
                },
            });
        }

        // function applyGiftCard() {
        //     // Call your function to apply the gift card and insert data into the database
        //     alert("Gift Card Applied!");
        // }
    </script>
</body>

</html>
