<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

<script>
    $('#edit').on('show.bs.modal', function (event) {


  var button = $(event.relatedTarget) // Button that triggered the modal
  var name = button.data('myname') // Extract info from data-* attributes
  var sub_name = button.data('mysubname') // Extract info from data-* attributes
  var sub_sub_name = button.data('mysubsubname') // Extract info from data-* attributes
  var cat_id = button.data('catid') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)

  modal.find('.modal-body #name').val(name);
  modal.find('.modal-body #sub_name').val(sub_name);
  modal.find('.modal-body #sub_sub_name').val(sub_sub_name);
  modal.find('.modal-body #cat_id').val(cat_id);
})

$('#delete').on('show.bs.modal', function (event) {


  var button = $(event.relatedTarget) // Button that triggered the modal
  var cat_id = button.data('catid') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)

  modal.find('.modal-body #cat_id').val(cat_id);
})
</script>
