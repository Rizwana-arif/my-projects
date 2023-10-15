            <!-- Footer Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            /*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a> -->
                        <!-- </div>
                    </div>
                </div>
            </div> --> 
            <!-- Footer End -->
        <!-- </div> -->
        <!-- Content End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div> -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    <script>
        $(document).ready(function () {
            var table = $('#example2').DataTable({
                lengthChange: false,
                "dom": 'Bfrtip',
                "buttons": [{
                    extend: 'copy',
                    className: 'btn btn-dark rounded-0 text-white',
                    text: '<i class="fa-regular fa-copy"></i> Copy'
                },

                {
                    extend: 'excel',
                    className: 'btn btn-dark rounded-0 text-white',
                    text: '<i class="far fa-file-excel"></i> Excel'
                }, {
                    extend: 'pdf',
                    className: 'btn btn-dark rounded-0 text-white',
                    text: '<i class="far fa-file-pdf"></i> Pdf'
                }, {
                    extend: 'csv',
                    className: 'btn btn-dark rounded-0 text-white',
                    text: '<i class="fas fa-file-csv"></i> CSV'
                }, {
                    extend: 'print',
                    className: 'btn btn-dark rounded-0 text-white',
                    text: '<i class="fas fa-print"></i> Print',
                    exportOptions: {
                        columns: [1,2,3,4,5,6]
                    }
                }
                ]
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    
</body>

</html>