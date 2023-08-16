<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kanun - Law Firm Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <h1>Kanun</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>8:00 - 9:00</h2>
                                    <p>Opening Hour Mon - Fri</p>
                                </div>
                                <div class="text">
                                    <h2>+123 456 7890</h2>
                                    <p>Call Us For Free Consultation</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="./index.php" class="nav-item nav-link active">Home</a>
                                <a href="#" class="nav-item nav-link">About</a>
                                <!-- <a href="service.html" class="nav-item nav-link">Practice</a> -->
                                <a href="./lawyers.php" class="nav-item nav-link">Lawyers</a>
                                <a href="#" class="nav-item nav-link">Case Studies</a>
                                <a href="./view-FAQ's.php" class="nav-item nav-link">FAQ's</a>

                                <?php
                                if(@$_SESSION['estatus']=="user"){
                                ?>
                                <a href="clients-profile.php" class="nav-item nav-link">MyProfile</a>
                                <a href="../admin panel/logout.php" class="nav-item nav-link">Logout</a>
                                <?php } ?>
                                <?php
                                if(@$_SESSION['estatus']=="lawyer"){
                                ?>
                                <a href="./lawyers-profile.php" class="nav-item nav-link">Profile</a>
                                <a href="../admin panel/logout.php"class="nav-item nav-link">Logout</a>
                                <?php } ?>
                                <!-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Blog Page</a>
                                        <a href="single.html" class="dropdown-item">Single Page</a>
                                    </div>
                                </div> -->
                                <a href="#" class="nav-item nav-link">Contact</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown">Register</a>
                                    <div class="dropdown-menu">
                                        <a href="./register-lawyers.php" class="dropdown-item">As Lawyer</a>
                                        <a href="./register-users.php" class="dropdown-item">As User</a>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                    <a href="#" class="btn nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                                    <div class="dropdown-menu">
                                         <a href="../admin panel/login.php" class="dropdown-item">As Admin</a>
                                        <a href="../admin panel/login.php" class="dropdown-item">As Lawyer</a>
                                        <a href="../admin panel/login.php"class="dropdown-item">As Client</a>
                                        <a href="../admin panel/login.php" class="dropdown-item">As Team</a>
                                    </div>
                                </div>
                            <div class="ml-auto">
                                <a class="btn" href="./appointment.php">Get Appointment</a>
                            </div>
                            
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->