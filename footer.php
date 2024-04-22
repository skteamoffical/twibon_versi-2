    <!-- Start JS -->        
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/jquery.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/popper.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/bootstrap.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/modernizr.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/detect.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/jquery.slimscroll.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/horizontal-menu.js"></script>

    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/horizontal-menu.js"></script>

    <!-- Required Datatable JS -->
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons Examples -->
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/jszip.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/buttons.colVis.min.js"></script>
    
    <!-- Responsive Examples -->
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init JS -->
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/init/table-datatable-init.js"></script>

    <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
    </script>

    <!-- Main JS -->
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/js/main.js"></script>
    <!-- End JS -->

</body>

</html>