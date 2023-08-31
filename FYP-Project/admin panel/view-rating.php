<?php
include("./include/connection.php");
session_start();
if (empty($_SESSION['user_Email'])) {
    header("location:./login.php");
}
include ('./include/header.php');
include("./include/sidebar.php");
?>
<style>
.card{
    margin-top: 10%;
    margin-left: 8%;
}
    </style>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4 w-75 ">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rating Details</h6>
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                       
                           
                           
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Lawyer Name</th>
                            <th>Comment</th>
                            <th>Rating Stars</th>
                           
                          
                        
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      $email=$_SESSION['user_Email'];
                      $u_name=$_SESSION['first_name'];
                        $sql= "SELECT * FROM `rating-lawyer` r INNER JOIN `lawyers-rec` l ON r.lawyer_id=l.lawyerid WHERE `email`='$email'";
                        
                        
   
                      
                $run = mysqli_query($conn, $sql);
                while ($fet = mysqli_fetch_assoc($run)) {
                    ?>
                    
                    <tr>
                    <td><?php echo $u_name; ?></td>
                        <td><?php echo $email; ?></td>
                        
                        <td><?php echo $fet['first_Name']; ?></td>
                        
                        <td><?php echo $fet['comment']; ?></td>
                        <!-- Assuming you have fetched the database result as $fet -->
<td>
    <?php
    // Get the number of stars from the database result
    $numStars = intval($fet['stars']);
    
    // Define the colors for filled and empty stars
    $filledStarColor = "#FFD700"; // Gold color
    $emptyStarColor = "#CCCCCC";  // Light gray color
    
    // Loop to display colored star icons
    for ($i = 1; $i <= 5; $i++) {
        // Determine the color based on the number of stars
        $starColor = ($i <= $numStars) ? $filledStarColor : $emptyStarColor;
        echo '<span style="color: ' . $starColor . ';">★</span>';
    }
    ?>
</td>
                    </tr>
                    <?php
                }
?>                
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->





</body>

</html>
<?php include ('./include/footer.php'); ?>