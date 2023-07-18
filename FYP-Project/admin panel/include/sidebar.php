 <?php


 ?>
 
 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
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
                            <a href="./add-lawyer.php" class="dropdown-item">Add Lawyers</a>
                            <a href="./approved-lawyers.php" class="dropdown-item">Approved Lawyers</a>
                            <a href="./disapproved-lawyers.php" class="dropdown-item">DisApproved Lawyers</a>
                        </div>
                    </div>
                    <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Lawyers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="./add-lawyer.php" class="dropdown-item">Add Lawyers</a>
                            <a href="./approved-lawyers.php" class="dropdown-item">Approved Lawyers</a>
                            <a href="./disapproved-lawyers.php" class="dropdown-item">Disapproved Lawyers</a>
                        </div>
                    </div> -->
                    <a href="./disapproved-lawyers.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Requests</a>
                    <a href="./appointment-request.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Appointment Requests</a>

                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Feedback</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Queries</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Change Password</a>
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
                    <a href="./appointment-records.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Appointments</a>
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
                            <a href="typography.html" class="dropdown-item">Police Station</a>
                            <a href="typography.html" class="dropdown-item">Act</a>
                        </div>
                        <a href="./logout.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>
                    </div>
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

