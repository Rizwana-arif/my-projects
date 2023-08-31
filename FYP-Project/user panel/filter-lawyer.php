<?php 
include ('./include/connection.php');
$casecategory=$_POST['category'];
if($casecategory=="null"){
    ?>
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
                            <img style="height : 300px;" src="<?php echo '../admin panel/data/lawyer-image/' . $fet['profile_image']; ?>" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2><?php echo $fet['first_Name'] . " " . $fet['last_Name']; ?></h2>
                            <p>Business Consultant</p>
                            <a class="btnnn " href="./lawyers-profile.php?lawyerid=<?php echo $fet['lawyerid']; ?>">  Profile</a>
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
    <?php
}
else {
    ?>
 <!-- Team Start -->
 <div class="team">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Expert Attorneys</h2>
            </div>
            <div class="row">
            <?php 
                    $sql="SELECT * FROM `lawyers-rec` WHERE `status`='approved' AND `speciality`='$casecategory'";
                    $run=mysqli_query($conn,$sql);
                    while ($fet=mysqli_fetch_assoc($run)){
                    ?>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img style="height : 300px;" src="<?php echo '../admin panel/data/lawyer-image/' . $fet['profile_image']; ?>" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2><?php echo $fet['first_Name'] . " " . $fet['last_Name']; ?></h2>
                            <p>Business Consultant</p>
                            <a class="btnnn " href="./lawyers-profile.php?lawyerid=<?php echo $fet['lawyerid']; ?>">  Profile</a>
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
    <?php
}
?>