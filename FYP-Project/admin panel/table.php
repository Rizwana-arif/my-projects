<?php 
include ('./include/header.php');
include ('./include/sidebar.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <title>LMS</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">


        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">

            <!--end breadcrumb-->


            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>update</th>
                                    <th>Delete</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>update</td>
                                    <td>Delete</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                 <tr>
                                    <td>update</td>
                                    <td>Delete</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>update</td>
                                    <td>Delete</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>63</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>update</td>
                                    <td>Delete</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>6</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>


                            </tbody>
                         
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            var table = $('#example2').DataTable({
                lengthChange: false,
                "dom": 'Bfrtip',
                "buttons": [{
                    extend: 'copy',
                    className: 'btn btn-primary rounded-0',
                    text: '<i class="fa-regular fa-copy"></i> Copy'
                },

                {
                    extend: 'excel',
                    className: 'btn btn-primary rounded-0',
                    text: '<i class="far fa-file-excel"></i> Excel'
                }, {
                    extend: 'pdf',
                    className: 'btn btn-primary rounded-0',
                    text: '<i class="far fa-file-pdf"></i> Pdf'
                }, {
                    extend: 'csv',
                    className: 'btn btn-primary rounded-0',
                    text: '<i class="fas fa-file-csv"></i> CSV'
                }, {
                    extend: 'print',
                    className: 'btn btn-primary rounded-0',
                    text: '<i class="fas fa-print"></i> Print',
                    exportOptions: {
                        columns: [0,1,2,3,4,5,6,7]
                    }
                }
                ]
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    <!--app JS-->
    <!-- <script src="assets/js/app.js"></script> -->
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Feb 2022 14:09:33 GMT -->

</html>