<?php
include ("./include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}
if(isset($_POST['sub'])){
  $supname=mysqli_real_escape_string($conn,$_POST['supname']);
$supemail=mysqli_real_escape_string($conn,$_POST['supemail']);
$supnum=mysqli_real_escape_string($conn,$_POST['supnum']);
$supdate=date ("m-d-y");
  $sql="INSERT INTO `supplier-rec` (`supname`,`supemail`,`supnum`,`supdate`) VALUES ('$supname','$supemail','$supnum','$supdate')";
  $run=mysqli_query($conn,$sql);
  if ($run){
    echo "<script>alert ('category has been inserted')</script>";
  }
  else{
    echo "<script>alert ('category has not been inserted')</script>";
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
                      <h4>Add Supplier</h4>
                      <button class="btn btn-primary" onclick="location.href='./view-supplier.php'">View</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Supplier Name</label>
                        <input type="text" class="form-control" name="supname" required="" id="supname" oninput="checkname()">
                        <span id="nerror" style="color:red;font-size:10px"></span>

                      </div>
                      <div class="form-group">
                        <label>Supplier Email</label>
                        <input type="email" class="form-control" name="supemail" id="supemail" required="" oninput="checkemail()">
                        <span id="eerror" style="color:red;font-size:10px"></span>

                      </div>
                      <div class="form-group">
                        <label>Supplier Number</label>
                        <input type="text" class="form-control" name="supnum" id="supnum" required="" oninput=
                        "checknum()">
                        <span id="perror" style="color:red;font-size:10px"></span>

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
   function checkname(){
         var supname=document.querySelector("#supname").value;
         var supnameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!supnameRegex.test(supname)) {
           document.querySelector("#nerror").innerHTML="Write Alphabets Only";
           document.querySelector("#supname").style.border="red solid 1px";
        
      }else{
        document.querySelector("#nerror").innerHTML="";
        document.querySelector("#supname").style.border="gray solid 2px";
      }
    }
    function checkemail(){
         var supemail=document.querySelector("#supemail").value;
         var supemailRegex =/^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/;;
         if (!supemailRegex.test(supemail)) {
           document.querySelector("#eerror").innerHTML="Write Alphabets Only";
           document.querySelector("#supemail").style.border="red solid 1px";
        
      }else{
        document.querySelector("#eerror").innerHTML="";
        document.querySelector("#supemail").style.border="gray solid 2px";
      }
    }
    function checknum(){
         var supnum=document.querySelector("#supnum").value;
         var supnumRegex =/^\+92\d{10}$|^(03\d{9})$|^(9\d{8})$/;
         if (!supnumRegex.test(supnum)) {
           document.querySelector("#perror").innerHTML="Write Alphabets Only";
           document.querySelector("#supnum").style.border="red solid 1px";
        
      }else{
        document.querySelector("#perror").innerHTML="";
        document.querySelector("#supnum").style.border="gray solid 2px";
      }
    }
</script>




<?php 
include ("./include/footer.php");
?>