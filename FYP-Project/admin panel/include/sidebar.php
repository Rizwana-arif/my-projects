 <?php



 ?>
 
 <!-- Sidebar Start -->
 <div class="sidebar pe-0 pb-0">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>LEGAL</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <?php
                    if($_SESSION['estatus']=="admin"){
                    ?>
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Admin</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Lawyers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./approved-lawyers.php" class="dropdown-item">Approved Lawyers</a>
                            <a href="./disapproved-lawyers.php" class="dropdown-item">Disapproved Lawyers</a>
                        </div>
                    </div>
                    <a href="./users-rec-view.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Users</a>
                    <a href="./view-payment-admin.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Payments</a>

                    <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Lawyers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-lawyer.php" class="dropdown-item">Add Lawyers</a>
                            <a href="./approved-lawyers.php" class="dropdown-item">Approved Lawyers</a>
                            <a href="./disapproved-lawyers.php" class="dropdown-item">Disapproved Lawyers</a>
                        </div>
                    </div> -->
                    <!-- <a href="./disapproved-lawyers.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Requests</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Appointment</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./unaccepted-appointments.php" class="dropdown-item">Unaccepted Appointment</a>
                            <a href="./accepted-appointments.php" class="dropdown-item">Accepted Appointment</a>
                            <a href="./rejected-appointments.php" class="dropdown-item">Rejected Appointment</a>
                        </div>
                    </div>

                    <!-- <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Feedback</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Queries</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./not-replyed-query.php" class="dropdown-item">Not replyed</a>
                            <a href="./replyed-query.php" class="dropdown-item">Replyed</a>
                        </div>
                    </div>
                    <a href="./update-password.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Change Password</a>
                    <a href="./logout.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->
                    <?php } ?>
                    <?php 
if($_SESSION['estatus']=="lawyer"){
                    ?>
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Lawyer</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Cases</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-new-cases-bylawyer.php" class="dropdown-item">Add Cases</a>
                            <a href="./view-cases-addbylawyer.php" class="dropdown-item">View Cases</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Team Members</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-role.php" class="dropdown-item">Role</a>
                            <a href="./add-members.php" class="dropdown-item">Members</a>
                        </div>
                    </div>
                    <a href="./appointment-records.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Appointments</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>User</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-role-bylawyer.php" class="dropdown-item">Add Role</a>
                            <a href="./view-role-bylawyer.php" class="dropdown-item">View Role</a>
                            <a href="./add-user-role.php" class="dropdown-item">User Role</a>
                            <a href="./view-user-role.php" class="dropdown-item">View User Role</a>
                        </div>
                    </div>
                    <a href="./view-payment-lawyer.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Payments</a>
                    <a href="./visiting-card.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>My Visiting Card</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Queries</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./not-replyed-query.php" class="dropdown-item">Not replyed</a>
                            <a href="./replyed-query.php" class="dropdown-item">Replyed</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Setting</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-cases.php" class="dropdown-item">Case Type</a>
                            <a href="./add-case-category.php" class="dropdown-item">Case Categories</a>
                            <a href="./add-case-subcategory.php" class="dropdown-item">Case SubCategories</a>
                            <a href="./province.php" class="dropdown-item">Province</a>
                            <a href="./district.php" class="dropdown-item">District</a>
                            <a href="./tehsil.php" class="dropdown-item">Tehsil</a>
                            <a href="./add-court.php" class="dropdown-item">Court</a>
                            <a href="typography.html" class="dropdown-item">Court Type</a>
                            <a href="typography.html" class="dropdown-item">Court Name</a>
                            <a href="./add-pstation.php" class="dropdown-item">Police Station</a>
                            <a href="./add-act.php" class="dropdown-item">Act</a>
                        </div>
                        <a href="./update-password.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Change Password</a>
                        <a href="./logout.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>
                    </div>
                    <?php }
                   
                    if($_SESSION['estatus']=="team"){
                        $teamid=$_SESSION['uroleid'];
                        $sql="SELECT * FROM `user-role-rec` WHERE `uroleid`='$teamid'";
                        $run=mysqli_query($conn,$sql);
                        $fet=mysqli_fetch_assoc($run);
                         $role=$fet['urole'];

                        $rsql="SELECT * FROM `role-add-bylawyer` WHERE `lroleid`='$role'";
                        $rrun=mysqli_query($conn,$rsql);
                        $rfet=mysqli_fetch_assoc($rrun);
                        // $rolearr=$rfet['roleacc'];
                        $arr=unserialize($rfet['roleacc']);
                        
                       
                    ?>
                   <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Team</a>
                   <?php  if(in_array("cases",$arr)){ ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Cases</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-new-cases-bylawyer.php" class="dropdown-item">Add Cases</a>
                            <a href="./view-cases-addbylawyer.php" class="dropdown-item">View Cases</a>
                        </div>
                    </div>
                    <?php }
                    if(in_array("teammember",$arr)){
                     ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Team Members</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-role.php" class="dropdown-item">Role</a>
                            <a href="./add-members.php" class="dropdown-item">Members</a>
                        </div>
                    </div>
                    <?php }
                    if(in_array("appointments",$arr)){
                    ?>
                    <a href="./appointment-records.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Appointments</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>User</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-role-bylawyer.php" class="dropdown-item">Add Role</a>
                            <a href="./view-role-bylawyer.php" class="dropdown-item">View Role</a>
                            <a href="./add-user-role.php" class="dropdown-item">User Role</a>
                            <a href="./view-user-role.php" class="dropdown-item">View User Role</a>
                        </div>
                    </div>
                    <?php } 
                    if(in_array("settings",$arr)){
                    ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Setting</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-cases.php" class="dropdown-item">Case Type</a>
                            <a href="./add-case-category.php" class="dropdown-item">Case Categories</a>
                            <a href="./add-case-subcategory.php" class="dropdown-item">Case SubCategories</a>
                            <a href="./province.php" class="dropdown-item">Province</a>
                            <a href="./district.php" class="dropdown-item">District</a>
                            <a href="./tehsil.php" class="dropdown-item">Tehsil</a>
                            <a href="./add-court.php" class="dropdown-item">Court</a>
                            <a href="typography.html" class="dropdown-item">Court Type</a>
                            <a href="typography.html" class="dropdown-item">Court Name</a>
                            <a href="./add-pstation.php" class="dropdown-item">Police Station</a>
                            <a href="./add-act.php" class="dropdown-item">Act</a>
                        </div>
                        <?php } ?>
                        <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Change Password</a>
                        <a href="./logout.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>
                    </div>


                    <?php } 
                     if($_SESSION['estatus']=="user"){
                    ?>
                      <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>User</a>
                    <a href="./lawyers-history.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Lawyers History</a>
                    <a href="./cases-history.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Case History</a>
                    <a href="./rating-lawyer.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Rating</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Payments</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-payments.php" class="dropdown-item">Send Payment</a>
                            <a href="./view-payments.php" class="dropdown-item">View Payment Record</a>
                        </div>
                    </div>
                    <a href="./update-password.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Change Password</a>
                    <a href="./logout.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>


                    <?php } ?>
                    <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Lawyers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-lawyer.php" class="dropdown-item">Add Lawyers</a>
                            <a href="./approved-lawyers.php" class="dropdown-item">Approved Lawyers</a>
                            <a href="./disapproved-lawyers.php" class="dropdown-item">Disapproved Lawyers</a>
                        </div>
                    </div> -->
                    <!-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Requests</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Feedback</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Queries</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Change Password</a> -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

