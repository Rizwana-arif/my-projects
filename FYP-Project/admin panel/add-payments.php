<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['user_Email'])){
    header("location:./login.php");
}
 $u_email=$_SESSION['user_Email'];

 if (isset($_POST['sub'])) {
 $u_email=$_SESSION['user_Email'];
  $Lawyer_id = mysqli_real_escape_string($conn, $_POST['Lawyer_id']);
  $payment = mysqli_real_escape_string($conn, $_POST['payment']);
  $receipt =  $_FILES['receipt']['name'];
$date=date('d-m-y');
  $a=strtolower(pathinfo($receipt,PATHINFO_EXTENSION));
  $arr=array("jpg" , "jpeg" ,"png");
  if(in_array($a,$arr)){
      $rand=rand(10000,999999);
      $p=$receipt."." .$rand. ".".$a;
      $sql = "INSERT INTO `payment-rec` (`u_email`, `Lawyer_id`, `payment`,`receipt`,`date`)VALUES ('$u_email','$Lawyer_id','$payment','$p','$date')";
      $run=mysqli_query($conn,$sql);
      if($run){
          move_uploaded_file($_FILES['receipt']['tmp_name'],"./data/receipt/".$p);
          echo "<script>alert('Payment record has been inserted')</script>";
          header("Refresh:0, url=./index.php");
      }
      else{
        echo "<script>alert('Payment record has not been inserted')</script>";
      }
  }else{
      echo "<script>alert('Image is invalid')</script>";

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
                      <h4>Payment
                      <!-- <a href="./viewcategory.php"></a> -->
                      <button class="btn btn-dark" style="margin-left:240px;font-size: 18px;" onclick="location.href='./view-payments.php'">View Payment</button></h4>

                    </div>
                    <div class="card-body">
                    <div class="form-group">
                    <label>Select Lawyer</label>
                    <select name="Lawyer_id" class="form-control">
    <option value="">Select lawyer</option>
    <?php
    $sql = "SELECT * FROM `users-rec` a INNER JOIN `lawyers-rec` l ON a.assign_lawyer=l.lawyerid WHERE `user_Email`='$u_email'";
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
                        <label> Payment</label>
                        <input type="text" name="payment" class="form-control" required=""/>
                      
                      </div>
                      <div class="form-group">
                        <label> Receipt</label>
                        <input type="file" name="receipt" class="form-control" required=""/>
                      
                      </div>
                    </div>
                    <div class="card-footer text-right ">
                      <button class="btn btn-dark w-100" name="sub"  value="Register">Submit</button>
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