<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])  && empty($_SESSION['lawyer_email']) && empty($_SESSION['user_Email']) ){
    header("location:./login.php");
}



$pass=$_SESSION['password'];
$sta=$_SESSION['estatus'];
if(isset($_POST['sub'])){
  $password=mysqli_real_escape_string($conn,$_POST['password']);
if($sta=="admin"){
  $id=$_SESSION['email'];
    $sql="UPDATE `admin` SET `password`='$password' WHERE `email`='$id'";
    $run=mysqli_query($conn,$sql);
    if($run){
					echo "<script>alert('Successfully ! password has been changed')</script>";
    }elseif($sta=="lawyer"){
      $lid=$_SESSION['lawyer_email'];
      $sql="UPDATE `lawyers-rec` SET `password`='$password' WHERE `lawyer_email`='$lid'";
        $run=mysqli_query($conn,$sql);
        if($run){
              echo "<script>alert('Successfully ! password has been changed')</script>";
        }elseif($sta=="user"){
          $uid=$_SESSION['user_Email'];
          $sql="UPDATE `users-rec` SET `password`='$password' WHERE `user_Email`='$uid'";
            $run=mysqli_query($conn,$sql);
            if($run){
                  echo "<script>alert('Successfully ! password has been changed')</script>";
            }else{
                  echo "<script>alert('Failed ! password has not been changed')</script>";
        
            }
}
}
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
                  <form method="Post" enctype="multipart/form-data" id="validateForm">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Current Password</label>
                        <input type="text" value="<?php echo $pass; ?>" class="form-control" required="" />
                      
                      </div>
                      <div class="form-group">
                        <label>New Password</label>
                        <input type="text" name="password" id="password" class="form-control" required="" />
                      
                      </div>
                    </div>
                    <div class="card-footer text-right ">
                      <button class="btn btn-primary justify-content-right" name="sub"  value="Submit">Submit</button>
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
<script>
    $('#validateForm').bootstrapValidator({
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
password: {
   						 validators: {
       						 notEmpty: {
            					message: 'Please enter your password'
       						 },
        				stringLength: {
           					 min: 8, // Minimum length requirement
           					 message: 'Your password must be at least 8 characters long'
        					},
        				regexp: {
           					 regexp: /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/,
            				message: 'Your password must contain at least one uppercase letter, one lowercase letter, one number, and one special character'
        					},
       					 // Add additional validators as needed, such as history checks or 2FA enforcement
    					}
					},
                }
			});
    </script>
</body>
<?php
 include ("./include/footer.php");

?>