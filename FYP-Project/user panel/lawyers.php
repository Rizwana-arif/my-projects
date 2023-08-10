<?php
include ('./include/connection.php');
session_start();
// if(empty($_SESSION['email']) && empty($_SESSION['cemail'])){
//     header("location:./login.php");
// } 
include ('./include/header.php');
?>
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Attorneys</h2>
                        </div>
                        <div class="col-12">
                            
                            <a href="">Attorneys</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>About Attorneys</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2>Meet Our Expert Attorneys</h2>
                    </div>
                    <div class="row">
                    <?php 
							$sql="SELECT * FROM `lawyers-rec` WHERE `status`='approved'";
							$run=mysqli_query($conn,$sql);
							while ($fet=mysqli_fetch_assoc($run)){
							?>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img style="height : 300px;" src="<?php echo '../admin panel/data/profile/' . $fet['pfile']; ?>" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Adam Phillips</h2>
                                    <p>Business Consultant</p>
                                    <a href="./lawyers-profile.php?lawyerid=<?php echo $fet['lawyerid']; ?>"><button type="submit" class="btn btn-white bg-white form-control" name="sub">Profile </button></a>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <?php } ?>
                        
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Newsletter Start -->
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Subscribe Our Newsletter</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>About Us</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Civil Law</a>
                                <a href="">Family Law</a>
                                <a href="">Business Law</a>
                                <a href="">Education Law</a>
                                <a href="">Immigration Law</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">About Us</a>
                                <a href="">Practices</a>
                                <a href="">Attorneys</a>
                                <a href="">Case Studies</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">HTML Codex</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
