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
                        <h3>List of Approved Lawyers</h3>
                        </div>
                        <div class="col-6">
                        <a class="btn btn-sm " href="./add-lawyers.php" style="margin-left: 62%;        background-color: #000;color: #ddd;"><i
                        class="fa fa-user-plus"></i>Add New</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered border-3">
                        <thead>
                           <tr>
                              <th>Image</th>
                              <th>ID</th>
                              <th>First_Name</th>
                              <th>Last_Name</th>
                              <th>Contact_Number</th>
                              <th>Speciality</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                           
                        <tbody>
                        <?php 
                           $sql="SELECT * FROM `lawyers-rec` WHERE `status`='disapproved'";
                           $run=mysqli_query($conn,$sql);
                           while($fet=mysqli_fetch_assoc($run)){
                           ?>
                           <tr>
                           <td><img width=50px height=50px src="<?php echo "./data/lawyer-image/" . $fet['profile_image']; ?> "/></td>
                              <td><?php echo $fet['lawyerid'] ; ?></td>
                              <td><?php echo $fet['first_Name'] ; ?></td>
                              <td><?php echo $fet['last_Name'] ; ?></td>
                              <td><?php echo $fet['contact_number'] ; ?></td>
                              <td><?php echo $fet['speciality'] ; ?></td>
                              <td><?php echo $fet['status'] ; ?></td>
                              <td class="text-right">

<a class="btn btn-sm btn-success" href="./update-approve-lawyer.php?lawyerid=<?php echo $fet['lawyerid']; ?>"><i class="fa-solid fa-check"></i></a>
<a class="btn btn-sm btn-secondary" href="./view-lawyers.php?lawyerid=<?php echo $fet['lawyerid']; ?>"><i class="fa-solid fa-eye"></i></a>
<a class="btn btn-sm btn-danger" href="./delete-lawyers.php?lawyerid=<?php echo $fet['lawyerid']; ?>"><i class="fa-solid fa-trash"></i></a>
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
