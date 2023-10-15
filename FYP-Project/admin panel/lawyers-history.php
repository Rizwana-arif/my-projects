<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['user_Email'])){
    header("location:./login.php");
}
$userid=$_SESSION['user_Email'];
$uid=$_SESSION['userid'];
include ('./include/header.php');
include ('./include/sidebar.php');
?>
<style>
img{
    border-radius: 50%;
    border : 1px solid black;
}
    </style>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON a.lawyer_name=l.lawyerid WHERE `client_email`='$userid' and `statuss`='accept'";
                                $run=mysqli_query($conn,$sql);
                                while($fet=mysqli_fetch_assoc($run)){
                                ?>
                                <tr>
                                    <td>
                                    <a href="<?php echo "./data/lawyer-image/" . $fet['profile_image']; ?>"><img width=50px height=50px src="<?php echo "./data/lawyer-image/" . $fet['profile_image']; ?> " /></a>
                                        <?php echo "   ".$fet['first_Name']; ?>
                                    </td>
                                    <td><?php echo $fet['Ref_Name']; ?></td>
                                    <td><?php echo $fet['Ref_No']; ?></td>
                                    <td><?php echo $fet['datetime']; ?></td>
                                    <td class="text-right">

<a class="btn btn-sm btn-success" title="Complete/Done" href="./update-client-complete.php?uid=<?php echo $uid; ?>"><i class="fa-solid fa-check-double"></i></a>
<a class="btn btn-sm btn-danger" title="Reject/Dismiss" href="./update-client-reject.php?uid=<?php echo $uid; ?>">
<i class="fa-brands fa-r-project"></i></a>
</td>
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