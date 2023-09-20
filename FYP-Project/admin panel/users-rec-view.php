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
                        <h3>List of Users</h3>
                        </div>
                        <div class="col-6">
                        <a class="btn btn-sm " href="../user panel/register-users.php" style="margin-left: 62%;        background-color: #000;color: #ddd;"><i
                        class="fa fa-user-plus"></i>Add New</a>
                        </div>
                  
                     </div>
                    <div class="table-responsive">
                    
                        <table id="example2" class="table table-striped table-bordered border-3">
                        <thead>
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Full_Name</th>
               
                <th>User Email</th>
               
                <th>Contact_Number</th>
                
                <th>City</th>
                
                <th>Assign_Lawyer</th>
                <th>Action</th>
            </tr>
        </thead>
       
                          
                        <tbody>
                        <?php 
        $sql="SELECT * FROM `users-rec` u LEFT JOIN `lawyers-rec` l ON u.assign_lawyer=l.lawyerid";
        $run=mysqli_query($conn,$sql);
        while($fet=mysqli_fetch_assoc($run)){
        ?>
                        
        
        <tr>
        <td><img width=50px height=50px src="<?php echo "./data/user-img/" . $fet['image']; ?> "/></td>
            <td><?php echo $fet['userid'] ; ?></td>
            <td><?php echo $fet['first_name'] . " " . $fet['last_name']; ?></td>
           
            <td><?php echo $fet['user_Email'] ; ?></td>
           
            <td><?php echo $fet['contact_number'] ; ?></td>
           
            <td><?php echo $fet['city'] ; ?></td>
           
            <td><?php echo $fet['first_Name'] ; ?></td>
            <td><a class="btn btn-sm btn-secondary" href="./view-users.php?userid=<?php echo $fet['userid']; ?>"><i class="fa-solid fa-eye"></i></a>
            <a class="btn btn-sm btn-danger" href="./delete-users.php?userid=<?php echo $fet['userid']; ?>"><i class="fa-solid fa-trash"></i></a>
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
