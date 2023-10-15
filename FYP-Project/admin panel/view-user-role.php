<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email'])){
    header("location:./login.php");
} 
$lawyer=$_SESSION['lawyer_email'];
include ('./include/header.php');
include ('./include/sidebar.php');
?>
 <div class="wrapper">


<!--end header -->
<!--start page wrapper -->
<div class="page-wrapper">

    <!--end breadcrumb-->

   
    <div class="card">
        <div class="card-body">
             <div class="row">
                <div class="col-6">
                <h3>Record of Users Role</h3>
                </div>
                <div class="col-6">
                        <a class="btn btn-sm " href="./add-user-role.php" style="margin-left: 62%;        background-color: #000;color: #ddd;"><i
                        class="fa fa-user-plus"></i>Add New</a>
                    </div>
          
             </div>
            <div class="table-responsive">
            
                <table id="example2" class="table table-striped table-bordered border-3 ">
                <thead>
                <tr>
                                        <th >Editor Lawyer Email</th>
                                        <th >User Name</th>
                                        <th >User Email</th>
                                        <th>Password</th>
                                        <th>Confirm Password</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
</thead>

                <tbody>
                <?php
$sql="SELECT * FROM `user-role-rec` ur INNER JOIN  `role-add-bylawyer` ra ON  ur.urole=ra.lroleid WHERE `lawyeremail`='$lawyer'";
$run=mysqli_query($conn,$sql);
while($fet=mysqli_fetch_assoc($run)){
?>
                  

<tr>
<td><?php echo $lawyer;?></td>
                                        <td><?php echo $fet['uname'] ;?></td>
                                        <td><?php echo $fet['uemail'] ;?></td>
                                        <td><?php echo $fet['password'] ;?></td>
                                        <td><?php echo $fet['cpass'] ;?></td>
                                        <td><?php echo $fet['role'] ;?></td>

   <td class="text-right">
   <a class="btn btn-sm btn-success" title="Update" href="./update-user-role.php?cctgid=<?php echo $cfet['uroleid']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
     <a class="btn btn-sm btn-danger" title="Delete" href="./delete-role-bylawyer.php?cctgid=<?php echo $cfet['uroleid']; ?>"><i class="fa-solid fa-trash"></i></a>
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
<?php include ('./include/footer.php');  ?>