<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
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
                     <div class="row">
                        <div class="col-6">
                        <h3>History of Lawyers</h3>
                        </div>
                        <!-- <div class="col-6">
                        <a class="btn btn-sm " href="./add-lawyers.php" style="margin-left: 62%;        background-color: #000;color: #ddd;"><i
                        class="fa fa-user-plus"></i>Add New</a>
                        </div> -->
                  
                     </div>
                    <div class="table-responsive">
                    
                        <table id="example2" class="table table-striped table-bordered border-3">
                        <thead>
                           <tr>
                              <th>Lawyer</th>
                              <th>Email</th>
                              <th>Contact_Number</th>
                              <th>Processing Cases</th>
                              <th>Win Cases</th>
                              <th>Losed Cases</th>
                           </tr>
                          
                        <tbody>
                        <?php 
                            $sql="SELECT * FROM `lawyers-rec`";
                           $run=mysqli_query($conn,$sql);
                           
                           while($fet=mysqli_fetch_assoc($run)){
                           ?>
                           <tr>
                           <td>
                             <a href="<?php echo "./data/lawyer-image/" . $fet['profile_image']; ?>"><img width=50px height=50px src="<?php echo "./data/lawyer-image/" . $fet['profile_image']; ?> " />
                            </a>
                            <?php echo " ".$fet['first_Name']; ?></td>
                              <td><?php echo $fet['lawyer_email'] ; ?></td>
                              <td><?php echo $fet['contact_number'] ; ?></td>
                              <td>
                                <?php
                                $lawyer=$fet['lawyerid'];
                                $psql="SELECT count(`l_name`) as process FROM `add-case-bylawyers` WHERE `l_name`='$lawyer' and `case_condition`='processing'";
                                $prun=mysqli_query($conn,$psql);
                               $pfet=mysqli_fetch_assoc($prun);
                               echo $pfet['process'];
                                ?>
                              </td>
                              <td>
                              <?php
                                $wsql="SELECT count(`l_name`) as win FROM `add-case-bylawyers` WHERE `l_name`='$lawyer' and `case_condition`='Wining'";
                                $wrun=mysqli_query($conn,$wsql);
                               $wfet=mysqli_fetch_assoc($wrun);
                               echo $wfet['win'];
                                ?>
                              </td>
                              <td>
                              <?php
                                $lsql="SELECT count(`l_name`) as lose FROM `add-case-bylawyers` WHERE `l_name`='$lawyer' and `case_condition`='Losing'";
                                $lrun=mysqli_query($conn,$lsql);
                               $lfet=mysqli_fetch_assoc($lrun);
                               echo $lfet['lose'];
                                ?>
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
    
</body>


<?php include ('./include/footer.php'); ?>
