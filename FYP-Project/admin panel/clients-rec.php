<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 
include ('./include/header.php');
include ('./include/sidebar.php');

?>
  <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">View Clients</h6>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th >Client Name</th>
                                        <th >Cnic</th>
                                        <th >Gender</th>
                                        <th >Mobile No</th>
                                        <th >Refrence Name</th>
                                        <th >Refrence No.</th>
                                        <th >Email</th>
                                        <th >Password</th>
                                        <th >State</th>
                                        <th >District</th>
                                        <th >Address</th>
                                        <th >Description</th>
                                        <th >Profile Picture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php 
                                $sql="SELECT * FROM `clients-rec` ";
                                $run=mysqli_query($conn,$sql);
                                while($fet=mysqli_fetch_assoc($run)){
                                ?>
                                    <tr>
                                        <td><?php echo $fet['cname'] ;?></td>
                                        <td><?php echo $fet['ccnic'] ;?></td>
                                        <td><?php echo $fet['gender'] ;?></td>
                                        <td><?php echo $fet['mobno'] ;?></td>
                                        <td><?php echo $fet['refname'] ;?></td>
                                        <td><?php echo $fet['refno'] ;?></td>
                                        <td><?php echo $fet['cemail'] ;?></td>
                                        <td><?php echo $fet['cpass'] ;?></td>
                                        <td><?php echo $fet['state'] ;?></td>
                                        <td><?php echo $fet['dis'] ;?></td>
                                        <td><?php echo $fet['cadd'] ;?></td>
                                        <td><?php echo $fet['des'] ;?></td>
                                       <td><img width=50px height=50px src="<?php echo "../user panel/data/client-img/" . $fet['img']; ?> "/></td>
                                        <td>
                                        <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- <i class="fa-duotone fa-grip-dots fa-flip-horizontal" style="--fa-secondary-opacity: 0;"></i> -->
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="./update-clients.php?clientid=<?php echo $fet['clientid']; ?>">Edit</a></li>
                                            <li><a class="dropdown-item" href="./delete-clients.php?clientid=<?php echo $fet['clientid']; ?>">Remove</a></li>
    
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