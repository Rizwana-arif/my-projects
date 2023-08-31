<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['user_Email'])){
    header("location:./login.php");
}
 $email=$_SESSION['user_Email'];

 if (isset($_POST['sub'])) {
 $email=$_SESSION['user_Email'];
  $lawyer_id = mysqli_real_escape_string($conn, $_POST['lawyer_id']);
  $stars = mysqli_real_escape_string($conn, $_POST['stars']);
  $comment = mysqli_real_escape_string($conn, $_POST['comment']);
 
 

 
  $Sql = "INSERT INTO `rating-lawyer` (`email`, `lawyer_id`, `stars`,`comment`)VALUES ('$email','$lawyer_id','$stars','$comment')";
$run= mysqli_query($conn,$Sql);
if($run){
  echo"<script>
  alert('Data has been inserted');
  </script>";
    // header("Location:profile.php");
    
}

 
}
include ('./include/header.php');
include ('./include/sidebar.php');


?>
<style>
.main-content{
margin-top : 10%;
}
</style>
<body> 
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center" >
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="Post" enctype="multipart/form-data">
                    <div class="card-header justify-content-center" >
                      <h4>Rating
                      <!-- <a href="./viewcategory.php"></a> -->
                      <button class="btn btn-primary" style="margin-left:240px;font-size: 18px;" onclick="location.href='./view-rating.php'">View Rating</button></h4>

                    </div>
                    <div class="card-body">
                    <div class="form-group">
                    <label>Select Lawyer</label>
                    <select name="lawyer_id" class="form-control">
    <option value="">Select lawyer</option>
    <?php
    $sql = "SELECT * FROM `users-rec` a INNER JOIN `lawyers-rec` l ON a.assign_lawyer=l.lawyerid WHERE `user_Email`='$email'";
    $run = mysqli_query($conn, $sql);
    
    while ($fet = mysqli_fetch_assoc($run)) {
        $lawyer_id = $fet['assign_lawyer'];
        $lawyer_name = $fet['first_Name'];
       
        ?>
        <option value="<?php echo $lawyer_id; ?>"><?php echo $lawyer_name; ?></option>
        <?php
    }
    ?>
</select>                     
                      </div>
                      <div class="form-group">
                        <label> Select Stars</label>
                        <select name="stars" class="form-control">
            <option value="5">5 Stars</option>
            <option value="4">4 Stars</option>
            <option value="3">3 Stars</option>
            <option value="2">2 Stars</option>
            <option value="1">1 Star</option>
        </select>
                      
                      </div>
                      <div class="form-group">
                        <label> Comment</label>
                        <textarea type="text" name="comment" class="form-control" required=""></textarea>
                      
                      </div>
                    </div>
                    <div class="card-footer text-right ">
                      <button class="btn btn-primary justify-content-right" name="sub"  value="Register">Submit</button>
                    </div>
                  </form>
                </div>
              
              </div>
             
            </div>
          </div>
        </section>
        
     
    </div>
  </div>
  <!-- General JS Scripts -->

</body>
<?php
 include ("./include/footer.php");

?>