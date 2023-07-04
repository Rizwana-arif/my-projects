<?php 
include ('./include/connection.php'); 
include ('./include/header.php');
?>
  <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Disapproved Lawyers</h6>
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
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php 
                                $sql="SELECT * FROM `registered-lawyers`";
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