<?php 
include ('./include/connection.php');
session_start();
if( empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
 $roleid=$_GET['roleid'];
$usql="SELECT * FROM `role-rec` WHERE `roleid`='$roleid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);
if(isset($_POST['update'])){
    
    $rolen=mysqli_real_escape_string($conn,$_POST['rolen']);
    $descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
   
    $upsql="UPDATE `role-rec` SET `rolen`='$rolen' , `descrip`='$descrip' WHERE `roleid`='$roleid'";
    $uprun=mysqli_query($conn,$upsql);
    if ($uprun){
      header("Refresh:0, url=./add-role.php");
      echo ("<script> alert ('Successfully ! Updated a role.') </script>");
        
      }
      else{
        echo ("<script> alert ('Failed !Not Updated a role.') </script>");
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
                      <h4 align=center>Rating
                      <!-- <a href="./viewcategory.php"></a> -->
                      </h4>

                    </div>
                    <div class="card-body">
                      <div class="form-group">
                      <label class="form-label" for="rolen">Role Name</label>
                    <input type="text" class="form-control" id="rolen" name="rolen" value="<?php echo $ufet['rolen']; ?>"/>
                      
                      </div>
                      <div class="form-group">
                      <label class="form-label" for="casetype">Role Description</label>
                    <input type="text" class="form-control" id="descrip" name="descrip" value="<?php echo $ufet['descrip']; ?>"/>
                      
                      </div>
                    </div>
                    <div class="card-footer text-right ">
                      <button class="btn btn-dark justify-content-right w-100" name="update"  value="Update">Update</button>
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

<?php include ('./include/footer.php'); ?>