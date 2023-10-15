<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
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
                     <div class="row">
                        <div class="col-6">
                        <h3>List of Appointments</h3>
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
                <th>ID</th>
                
                <th>Client_Name</th>
               
                
                <th>Ref_No</th>
                <th>Email</th>
               
                <th>Case_Category</th>
               
                <th>DateTime</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
       
                        <tbody>
                        <?php
        $sql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid where `statuss`='unaccepted' OR `statuss`='pending'";
        $run=mysqli_query($conn,$sql);
        while($fet=mysqli_fetch_assoc($run)){
        ?>
                          
       
       <tr>
           <td><?php echo $fet['appoinid'] ; ?></td>
           <td><?php echo $fet['client_name'] ; ?></td>
           
          
           <td><?php echo $fet['Ref_No'] ; ?></td>
           <td><?php echo $fet['client_email'] ; ?></td>
          
           <td><?php echo $fet['casetype'] ; ?></td>
          
           <td><?php echo $fet['datetime'] ; ?></td>
           <td><?php echo $fet['statuss'] ; ?></td>

           
           <td class="text-right">

                         <a class="btn btn-sm btn-success" title="Accept" href="./update-appoin-accept.php?appoinid=<?php echo $fet['appoinid']; ?>"><i class="fa-solid fa-check"></i></a>
                         <a class="btn btn-sm btn-secondary" title="View" href="./view-appointment.php?appoinid=<?php echo $fet['appoinid']; ?>"><i class="fa-solid fa-eye"></i></a>
                         <a class="btn btn-sm btn-danger" title="Delete" href="./delete-appointment.php?appoinid=<?php echo $fet['appoinid']; ?>"><i class="fa-solid fa-trash"></i></a>
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
