<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 
$lawyer=$_SESSION['lawyerid'];
// $sql="SELECT * FROM `appointment-rec` WHERE `clawyer`='$lawyer'";
// $run=mysqli_query($conn,$sql);
// $fet=mysqli_fetch_assoc($run);
// $clientn=$fet['']
include ('./include/header.php');
include ('./include/sidebar.php');
?>
  <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">View Cases Details</h6>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th >Editor Lawyer Name</th>
                                        <th >Lawyer Email</th>
                                        <th >Client Name</th>
                                        <th >Client CNIC</th>
                                        <th >Client Mobile no.</th>
                                        <th >Petitioner Name</th>
                                        <th >Advocate Name</th>
                                        <th >Respondent Name</th>
                                        <th >Respondent Advocate</th>
                                        <th >Province</th>
                                        <th >District</th>
                                        <th >Tehsil</th>
                                        <th >Court Name</th>
                                        <th >Judge Name</th>
                                        <th >Case Type</th>
                                        <th >Case Category</th>
                                        <th >Case Subcategory</th>
                                        <th >Case Number</th>
                                        <th >Case Date</th>
                                        <th >Refrence No.</th>
                                        <th >Reg. Date</th>
                                        <th >Police Station</th>
                                        <th >FIR No.</th>
                                        <th >FIR Year</th>
                                        <th >File no.</th>
                                        <th >File Date</th>
                                        <th >Act Type</th>
                                        <th >Section</th>
                                        <th >Last Date</th>
                                        <th >Next Date</th>
                                        <th >Purpose of hearing</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                <?php 
                                $sql="SELECT * FROM `add-case-bylawyers` ac INNER JOIN `appointment-rec` ap ON  ac.clientn=ap.appoinid and ac.ccnic=ap.appoinid and ac.cmobno=ap.appoinid INNER JOIN `province-rec` pr ON ac.pro=pr.pid INNER JOIN `district-rec` dr ON ac.dis=dr.did INNER JOIN `tehsil-rec` tr ON ac.teh=tr.tid INNER JOIN `court-rec` cr ON ac.court=cr.courtid INNER JOIN `case-type` ct ON ac.caset=ct.caseid INNER JOIN `case-category` cc ON ac.ccat=cc.cctgid INNER JOIN `case-subcategory` cs ON ac.csub=cs.csubid WHERE `lawyerid`='$lawyer' ";
                                $run=mysqli_query($conn,$sql);
                                while($fet=mysqli_fetch_assoc($run)){
                                ?>
                                    <tr>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['pname'] ;?></td>

                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>
                                        <td><?php echo $fet['lawyerid'] ;?></td>

                                       
                                       
                                        <td>
                                        <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- <i class="fa-duotone fa-grip-dots fa-flip-horizontal" style="--fa-secondary-opacity: 0;"></i> -->
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="./.php?appoinid=<?php echo $fet['appoinid']; ?>">Accept</a></li>
                                            <li><a class="dropdown-item" href="./update-appoin-reject.php?appoinid=<?php echo $fet['appoinid']; ?>">Reject</a></li>
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