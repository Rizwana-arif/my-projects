<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['user_Email'])){
    header("location:./login.php");
}
echo $myid=$_SESSION['user_Email'];
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
                                    <th>Payment</th>
                                    <th>receipt</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql="SELECT * FROM `payment-rec` p INNER JOIN `lawyers-rec` l ON p.Lawyer_id=l.lawyerid WHERE `u_email`='$myid'";
                                $run=mysqli_query($conn,$sql);
                                while($fet=mysqli_fetch_assoc($run)){
                                ?>
                                <tr>
                                    <td><?php echo $fet['first_Name']; ?></td>
                                    <td><?php echo $fet['payment']; ?></td>
                                    <td><img width=50px height=50px src="<?php echo "./data/receipt/" . $fet['receipt']; ?> "/></td>
                                    <td><?php echo $fet['date']; ?></td>
                                   <td><a class="btn btn-sm btn-secondary" href="./payment-view.php?pay_id=<?php echo $fet['pay_id']; ?>"><i class="fa-solid fa-eye"></i></a></td>
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