    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>public/admin/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>public/admin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>public/admin/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>public/admin/js/sb-admin-2.js"></script>

    <script src="<?php echo base_url()?>public/admin/ckeditor5/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#MoTa' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>

</body>

</html>
