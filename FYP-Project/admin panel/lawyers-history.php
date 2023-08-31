<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['user_Email'])){
    header("location:./login.php");
}
$userid=$_SESSION['user_Email'];
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
                                    <th>REF Name</th>
                                    <th>REF No.</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON a.lawyer_name=l.lawyerid WHERE `client_email`='$userid'";
                                $run=mysqli_query($conn,$sql);
                                while($fet=mysqli_fetch_assoc($run)){
                                ?>
                                <tr>
                                    <td><?php echo $fet['first_Name']; ?></td>
                                    <td><?php echo $fet['Ref_Name']; ?></td>
                                    <td><?php echo $fet['Ref_No']; ?></td>
                                    <td><?php echo $fet['datetime']; ?></td>
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