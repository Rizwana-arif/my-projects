<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['user_Email'])){
    header("location:./login.php");
}
echo $myid=$_SESSION['userid'];
include ('./include/header.php');
include ('./include/sidebar.php');
?>
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
                        <table id="example2" class="table table-striped table-bordered border-3">
                            <thead>
                                <tr>
                                    <th>Lawyer Name</th>
                                    <th>Case Details</th>
                                    <th>Case Status</th>
                                    <th>Last Date</th>
                                    <th>Next Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql="SELECT * FROM `add-case-bylawyers` a INNER JOIN `lawyers-rec` l ON a.l_name=l.lawyerid WHERE `client_email`='$myid'";
                                $run=mysqli_query($conn,$sql);
                                while($fet=mysqli_fetch_assoc($run)){
                                ?>
                                <tr>
                                    <td><?php echo $fet['first_Name']; ?></td>
                                    <td><?php echo $fet['ph']; ?></td>
                                    <td><?php echo $fet['case_condition']; ?></td>
                                    <td><?php echo $fet['ldate']; ?></td>
                                    <td><?php echo $fet['ndate']; ?></td>
                                </tr>
                               
                                <?php } ?>

                            </tbody>
                         
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    


 
    <!--app JS-->
    <!-- <script src="assets/js/app.js"></script> -->
</body>

<?php include ('./include/footer.php'); ?>