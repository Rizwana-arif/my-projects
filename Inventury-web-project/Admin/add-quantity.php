<?php
include ("./include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}
if(isset($_POST['sub'])){
  $quaname=strtolower(mysqli_real_escape_string($conn,$_POST['quaname']));
$quadescrip=mysqli_real_escape_string($conn,$_POST['quadescrip']);
$quadate=date ("m-d-y");
  $sql="INSERT INTO `quantity-rec` (`quaname`,`quadescrip`,`quadate`) VALUES ('$quaname','$quadescrip','$quadate')";
  $run=mysqli_query($conn,$sql);
  if ($run){
    echo "<script>alert ('Quantity has been inserted')</script>";
  }
  else{
    echo "<script>alert ('Quantity has not been inserted')</script>";
  }
}
include ("./include/header.php");
include ("./include/sidebar.php");


?>
<style>
  .btn{
    margin-left: auto;
    }
  </style>
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post">
                    <div class="card-header">
                      <h4>Add Quantity</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-quantity.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quaname" id="quaname" required="" oninput="checkquaname()">
                        <span id="error" style="color:red;font-size:10px"></span>
                      </div>
                     
                      <div class="form-group mb-0">
                        <label>Quantity Description</label>
                        <textarea class="form-control" required="" name="quadescrip"></textarea>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" name="sub">Submit</button>
                    </div>
                  </form>
                </div>
</div>
</div>
</div>
</section>
</div>
                
<script>
   function checkquaname(){
         var quaname=document.querySelector("#quaname").value;
         var quanameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!quanameRegex.test(quaname)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#quaname").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#quaname").style.border="gray solid 2px";
      }
    }
  </script>




<?php 
include ("./include/footer.php");
?>