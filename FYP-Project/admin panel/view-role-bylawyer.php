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
                            <h6 class="mb-4">View Role</h6>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th >Editor Lawyer Email</th>
                                        <th >Role</th>
                                        <th >User Access</th>
                                        <th>Access Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php 
                                $sql="SELECT * FROM `role-add-bylawyer` WHERE `lawyern`='$lawyer'";
                                $run=mysqli_query($conn,$sql);
                               while($fet=mysqli_fetch_assoc($run)){
                                ?>
                                  <tr>
                                        <td><?php echo $lawyer;?></td>
                                        <td><?php echo $fet['role'] ;?></td>
                                        <td><?php echo $fet['access_user'] ;?></td>
                                        <td>
                                        <?php
                                        $arr=unserialize($fet['roleacc']);
                                        foreach($arr as $arol){
                                          echo $arol . " , ";
                                           
                                         }
                                         ?> 
                                        </td>
                                        <td>
                                        <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- <i class="fa-duotone fa-grip-dots fa-flip-horizontal" style="--fa-secondary-opacity: 0;"></i> -->
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="./update-role-bylawyer.php?lroleid=<?php echo $fet['lroleid']; ?>">Edit</a></li>
                                            <li><a class="dropdown-item" href="./delete-role-bylawyer.php?lroleid=<?php echo $fet['lroleid']; ?>">Delete</a></li>
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