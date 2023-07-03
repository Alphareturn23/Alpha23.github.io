
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>
    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>
    <!-- page css -->
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- page js -->
    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>

    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/chartist/chartist.min.js"></script>

    <script src="asset/plugins/jquery/jquery.min.js"></script>
    
    <!-- DataTables  & Plugins -->
    <script src="asset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="asset/plugins/jszip/jszip.min.js"></script>
    <script src="asset/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="asset/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="asset/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="asset/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="asset/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    
    <!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
       "lengthChange": false, 
       "autoWidth": false,
      buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
            function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>







   
    


    
