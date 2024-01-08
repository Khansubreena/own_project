<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/r-2.2.9/sc-2.0.5/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    $('.create_entity_button').attr('disabled', true);
    $(".entity_name").keyup(function(){
      var entity_name = $(this).val();
      if (entity_name == null || entity_name == "") {
        $('.create_entity_button').attr('disabled', true);
      }
      else{
        $('.create_entity_button').attr('disabled', false);
      }
    });
    $('.edit_entity_button').click(function(){
      var entity_name = $(this).data('entity');
      var entity_id = $(this).data('entity-id');
      $('#faq-entity-name').val(entity_name);
      $('#faq-entity-id').val(entity_id);
    });
    $('.newEntityButton').click(function(){
      $('#faq-entity-name').val('');
      $('#faq-entity-id').val('');
    })
    $('.table-striped').DataTable();

});
</script>
</body>
</html>