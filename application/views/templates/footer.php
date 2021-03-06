            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Surveyor Indonesia <?= date('Y'); ?></span><br/><br/>
                        <span>Design And Developed By <strong>Vkree</strong></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-info" href="<?= base_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

             <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
             <script src="<?= base_url(); ?>assets/js/myscript.js"></script>
             <script type="text/javascript" src="<?= base_url(); ?>assets/DataTables/datatables.min.js"></script>
             <script type="text/javascript">
                 $(document).ready( function () {
                    $('#reqtransport').DataTable( {
                        "processing":true,
                        // "serverSide":true,
                        "scrollY":'250px',
                        dom: 'Bfrtip',
                         buttons: [
                        'copy','csv', 'pdf'

                     ] 
                    });
                } );
                  $(document).ready( function () {
                    $('#inbox').DataTable( {
                        "processing":true,
                        // "serverSide":true,
                        "scrollY":'250px',
                        dom: 'Bfrtip',
                         buttons: [
                        'copy','csv', 'pdf'

                     ] 
                    });
                } );
             </script>
             <script type="text/javascript">
                 $(document).ready( function () {
                    $('#menutbl').DataTable({
                        "scrollY":'250px'
                    });
                } );
             </script>
              <script type="text/javascript">
                 $(document).ready( function () {
                    $('#tabelreport').DataTable({
                        "scrollY":'250px'
                    });
                } );
             </script>
            
            <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });



                $('.form-check-input').on('click', function() {
                    const menuId = $(this).data('menu');
                    const roleId = $(this).data('role');

                    $.ajax({
                        url: "<?= base_url('admin/changeaccess'); ?>",
                        type: 'post',
                        data: {
                            menuId: menuId,
                            roleId: roleId
                        },
                        success: function() {
                            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                        }
                    });

                });
            </script>

            </body>

            </html> 