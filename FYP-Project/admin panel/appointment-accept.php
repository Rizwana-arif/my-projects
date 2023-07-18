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
                            <h6 class="mb-4">View Appointment Accepted Request</h6>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th >Lawyer Name</th>
                                        <th >Email</th>
                                        <th >CNIC</th>
                                        <th >Phone No</th>
                                        <th >Client Name</th>
                                        <th >Client Email</th>
                                        <th >Refrence Name</th>
                                        <th >Refrence No.</th>
                                        <th >Client Phone no.</th>
                                        <th >State</th>
                                        <th >District</th>
                                        <th >Address</th>
                                        <th >Description</th>
                                        <th >Case Category</th>
                                        <th >Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php 
                                $sql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.clawyer=l.lawyerid INNER JOIN `case-type` c ON a.casecat=c.caseid where `sta`='accept'";
                                $run=mysqli_query($conn,$sql);
                                while($fet=mysqli_fetch_assoc($run)){
                                ?>
                                    <tr>
                                        <td><?php echo $fet['name'] ;?></td>
                                        <td><?php echo $fet['email'] ;?></td>
                                        <td><?php echo $fet['cnic'] ;?></td>
                                        <td><?php echo $fet['phoneno'] ;?></td>
                                        <td><?php echo $fet['clname'] ;?></td>
                                        <td><?php echo $fet['clemail'] ;?></td>
                                        <td><?php echo $fet['clrefn'] ;?></td>
                                        <td><?php echo $fet['clrefno'] ;?></td>
                                        <td><?php echo $fet['clmob'] ;?></td>
                                        <td><?php echo $fet['clstate'] ;?></td>
                                        <td><?php echo $fet['cldis'] ;?></td>
                                        <td><?php echo $fet['cladd'] ;?></td>
                                        <td><?php echo $fet['cldes'] ;?></td>
                                        <td><?php echo $fet['casetype'] ;?></td>
                                       <td><?php echo $fet['sta'] ;?></td>
                                        <td>
                                        <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- <i class="fa-duotone fa-grip-dots fa-flip-horizontal" style="--fa-secondary-opacity: 0;"></i> -->
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="./update-appoin-request.php?appoinid=<?php echo $fet['appoinid']; ?>">Pending</a></li>
                                            <li><a class="dropdown-item" href="./reject-appointment.php?appoinid=<?php echo $fet['appoinid']; ?>">Reject</a></li>
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