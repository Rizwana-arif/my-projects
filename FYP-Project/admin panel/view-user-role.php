<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 
$lawyer=$_SESSION['email'];
include ('./include/header.php');
include ('./include/sidebar.php');
?>
  <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">View User Role</h6>
                            <div class="table-responsive">
                            <table class="table">
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
                                        <td>
                                        <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- <i class="fa-duotone fa-grip-dots fa-flip-horizontal" style="--fa-secondary-opacity: 0;"></i> -->
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="./update-user-role.php?uroleid=<?php echo $fet['uroleid']; ?>">Edit</a></li>
                                            <li><a class="dropdown-item" href="./delete-user-role.php?uroleid=<?php echo $fet['uroleid']; ?>">Delete</a></li>
                                        </ul>
                                        </div>

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
<?php include ('./include/footer.php');  ?>