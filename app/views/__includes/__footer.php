<!-- <footer class="main-footer">
  <strong>Copyright &copy; 2014-2021
    <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.1.0
  </div>
</footer> -->

<link rel="stylesheet" href="<?= ASSETS ?>/dist/js/ApiMedic.js">

</div>
<link rel="stylesheet" href="<?= ASSETS ?>/dist/js/ApiMedic.js">
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= ASSETS ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= ASSETS ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge("uibutton", $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="<?= ASSETS ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--  AdminLTE -->
<script src="<?= ASSETS ?>/dist/js/adminlte.js"></script>

<!-- ICONOS -->
<script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
<!-- <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script> -->

<!-- SweetAlert2 -->
<script src="<?= ASSETS ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Select2 -->
<script src="<?= ASSETS ?>/plugins/select2/js/select2.full.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= ASSETS ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= ASSETS ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= ASSETS ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= ASSETS ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= ASSETS ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= ASSETS ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= ASSETS ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= ASSETS ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= ASSETS ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= ASSETS ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= ASSETS ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= ASSETS ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- boostrap  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
  $(function() {
    $("#__dataTable").DataTable({
      pageLength : 8,
      "responsive": false,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["csv", "excel", "print"],
      "paging": true,
      "searching": true,
      "ordering": false,
      language: {
        "emptyTable": "Aún no hay registros",
        "info": "Mostrando página _PAGE_ de _PAGES_ de _TOTAL_ filas.",
        "infoEmpty": "",
        "infoFiltered": "",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Filtrar:",
        "zeroRecords": "No se encontró HT",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
    }).buttons().container().appendTo('#__dataTable_wrapper .col-md-6:eq(0)');
  });

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4'
    })
  });
  
</script>
<script src="<?= ASSETS ?>/dist/js/ApiMedic.js"></script>
</body>

</html>