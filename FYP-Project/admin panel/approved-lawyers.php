<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 
include ('./include/header.php');
?>
  <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">View Lawyers</h6>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th >Lawyer Name</th>
                                        <th >Email</th>
                                        <th >CNIC</th>
                                        <th >Phone No</th>
                                        <th >State</th>
                                        <th >Password</th>
                                        <th >Experience</th>
                                        <th >Experience year</th>
                                        <th >Qualification</th>
                                        <th >Experience Area</th>
                                        <th >Profile Pic</th>
                                        <th >ID card front</th>
                                        <th >ID card back</th>
                                        <th >Bar License</th>
                                        <th >Resume</th>
                                        <th >Intro</th>
                                        <th >Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php 
                                $sql="SELECT * FROM `lawyers-rec` where `status`='approved'";
                                $run=mysqli_query($conn,$sql);
                                while($fet=mysqli_fetch_assoc($run)){
                                ?>
                                    <tr>
                                        <td><?php echo $fet['name'] ;?></td>
                                        <td><?php echo $fet['email'] ;?></td>
                                        <td><?php echo $fet['cnic'] ;?></td>
                                        <td><?php echo $fet['phoneno'] ;?></td>
                                        <td><?php echo $fet['state'] ;?></td>
                                        <td><?php echo $fet['password'] ;?></td>
                                        <td><?php echo $fet['exp'] ;?></td>
                                        <td><?php echo $fet['expyear'] ;?></td>
                                        <td><?php echo $fet['quali'] ;?></td>
                                        <td><?php echo $fet['exparea'] ;?></td>
                                        <td><img width=50px height=50px src="<?php echo "./data/profile/" . $fet['pfile']; ?> "/></td>
                                        <td><img width=50px height=50px src="<?php echo "./data/id-card-pics/" . $fet['idffile']; ?> "/></td>
                                        <td><img width=50px height=50px src="<?php echo "./data/id-card-pics/" . $fet['idbfile']; ?> "/></td>
                                        <td><img width=50px height=50px src="<?php echo "./data/license/" . $fet['lifile']; ?> "/></td>
                                        <td><img width=50px height=50px src="<?php echo "./data/resume/" . $fet['rfile']; ?> "/></td>
                                        <td><?php echo $fet['intro'] ;?></td>
                                        <td><?php echo $fet['status'] ;?></td>
                                        <td>
                                        <div class="dropdown">
  <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <!-- <i class="fa-duotone fa-grip-dots fa-flip-horizontal" style="--fa-secondary-opacity: 0;"></i> -->
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="./update-status.php?lawyerid=<?php echo $fet['lawyerid']; ?>">Disapproved</a></li>
    <li><a class="dropdown-item" href="./remove-lawyer.php?lawyerid=<?php echo $fet['lawyerid']; ?>">Remove</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
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