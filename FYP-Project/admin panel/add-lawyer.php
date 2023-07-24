<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $cnic=mysqli_real_escape_string($conn,$_POST['cnic']);
    $phoneno=mysqli_real_escape_string($conn,$_POST['phoneno']);
    $state=mysqli_real_escape_string($conn,$_POST['state']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $exp=mysqli_real_escape_string($conn,$_POST['exp']);
    $expyear=mysqli_real_escape_string($conn,$_POST['expyear']);
    $quali=mysqli_real_escape_string($conn,$_POST['quali']);
    $exparea=mysqli_real_escape_string($conn,$_POST['exparea']);
    $pfile=$_FILES['pfile']['name'];
    $idffile=$_FILES['idffile']['name'];
    $idbfile=$_FILES['idbfile']['name'];
    $lifile=$_FILES['lifile']['name'];
    $rfile=$_FILES['rfile']['name'];
    $intro=mysqli_real_escape_string($conn,$_POST['intro']);
    $status="approved";
$estatus="lawyer";

    $a=strtolower(pathinfo($pfile,PATHINFO_EXTENSION));
    $a1=strtolower(pathinfo($idffile,PATHINFO_EXTENSION));
    $a2=strtolower(pathinfo($idbfile,PATHINFO_EXTENSION));
    $a3=strtolower(pathinfo($lifile,PATHINFO_EXTENSION));
    $a4=strtolower(pathinfo($rfile,PATHINFO_EXTENSION));
    $arr=array("jpg" , "jpeg" ,"png");
    if(in_array($a,$arr) and in_array($a1,$arr) and in_array($a2,$arr) and in_array($a3,$arr) and in_array($a4,$arr)){
        $rand=rand(10000,999999);
        $pic=$pfile."." .$rand. ".".$a;
        $idf=$idffile."." .$rand. ".".$a1;
        $idb=$idbfile."." .$rand. ".".$a2;
        $li=$lifile."." .$rand. ".".$a3;
        $rf=$rfile."." .$rand. ".".$a4;
        $sql="INSERT INTO `lawyers-rec`(`name`,`email`,`cnic`, `phoneno`,`state`,`password`,`exp`,`expyear`,`quali`,`exparea`,`pfile`,`idffile`,`idbfile`,`lifile`,`rfile`,`intro`,`status`,`estatus`) VALUES ('$name','$email','$cnic','$phoneno','$state','$password','$exp','$expyear','$quali','$exparea','$pic','$idf','$idb','$li','$rf','$intro','$status','$estatus')";
        $run=mysqli_query($conn,$sql);
        if($run){

            move_uploaded_file($_FILES['pfile']['tmp_name'],"./data/profile/".$pic);
            move_uploaded_file($_FILES['idffile']['tmp_name'],"./data/id-card-pics/".$idf);
            move_uploaded_file($_FILES['idbfile']['tmp_name'],"./data/id-card-pics/".$idb);
            move_uploaded_file($_FILES['lifile']['tmp_name'],"./data/license/".$li);
            move_uploaded_file($_FILES['rfile']['tmp_name'],"./data/resume/".$rf);
            echo "<script>alert ('Data has been inserted')</script>";
        }
        else{
            $msg= "Your data has not been inserted";
        }
    }
    else{
        $msg="invalid img";
    }
}
include ('./include/header.php');
include ('./include/sidebar.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    #togglePassword {
  position: absolute;
  top: 31%;
  right: 60px; /* Adjust the distance from the right as needed */
  transform: translateY(-50%);
  cursor: pointer;
}

</style>
<body>
    <div class="container-fluid pt-4 px-4 ">
        
          
                <div class="bg-light rounded h-100 p-4">
                    <h4 class="mb-4 d-flex justify-content-center text-success">Register Lawyers</h4>
                    <form  method="post" enctype="multipart/form-data">
            <div class="row g-4 ">
                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" oninput="checkname()"/>
                            <span id="nerror" style="color:red;font-size:10px"></span>

                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" oninput="checkemail()">
                                <span id="eerror" style="color:red;font-size:10px"></span>
                            </div>
                    
                        <div class="mb-3 col-lg-4">
                            <label for="cnic" class="form-label">CNIC</label>
                            <input type="text" class="form-control" id="cnic" name="cnic" oninput="checkcnic()">
                            <span id="cerror" style="color:red;font-size:10px"></span>
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label for="phoneno" class="form-label">Phone No.</label>
                            <input type="text" class="form-control" id="phoneno" name="phoneno" oninput="checkmob()">
                            <span id="merror" style="color:red;font-size:10px"></span>
                        </div>
                        <div class="mb-3 col-lg-4">
                      
                            <label  class="form-label">State</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="state">
                                <option selected>Choose state</option>
                                <option >Jaranwala</option>
                                <option >nshataabad</option>
                                <option >shah kout</option>
                            </select>
                           
                        </div>
                        <div class="mb-3 col-lg-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" oninput="checkpassword()"/>
                            <i class="fa-regular fa-eye" id="togglePassword"></i>
                        <span id="perror" style="color:red;font-size:10px"></span>
                       </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label" for="exp">Experience</label>
                        <input type="text" class="form-control" id="exp" name="exp" oninput="checkexp()"/>
                        <span id="exerror" style="color:red;font-size:10px"></span>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label" for="expyear">Experience in year </label>
                        <input type="text" class="form-control" id="expyear" name="expyear" oninput="checkexpyear()"/>
                        <span id="yerror" style="color:red;font-size:10px"></span>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">Qualification</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="quali">
                        <option selected></option>
                        <option >L.L.B (3years)</option>
                        <option>L.L.B (5years)</option>
                        <option>Barrister</option>
                        <option>L.L.M</option>
                        <option>Barrister</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">Area of Expertise</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="exparea">
                                <option selected></option>
                                <option >General Law</option>
                                <option>Family Law</option>
                                <option>Criminal Law</option>
                                <option>Business Law</option>
                                <option>Consumer Law</option>
                                <option>Real State Law</option>
                                <option>Immigration Law</option>
                                <option>Banking Law</option>
                                <option>Traffic Law</option>
                                <option>Tax Law</option>
                                <option>Tax Return Filling</option>
                            </select>
                    </div>
                       
                            <div class="mb-3 col-lg-4">
                                <label for="formFile" class="form-label">Profile Picture</label>
                                <input class="form-control" type="file" id="formFile" name="pfile">
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="formFileMultiple" class="form-label">Id Card Front side</label>
                                <input class="form-control" type="file" id="formFileMultiple" name="idffile">
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="formFileSm" class="form-label">Id Card Back side</label>
                                <input class="form-control " id="formFileSm" type="file" name="idbfile">
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="formFileLg" class="form-label">Bar License/Reg. License</label>
                                <input class="form-control " id="formFileLg" type="file" name="lifile">
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="formFileSm" class="form-label">Resume</label>
                                <input class="form-control " id="formFileSm" type="file" name="rfile">
                            </div>
                     
                        <div class="mb-3 col-lg-4">
                            <label class="form-label">About ypurself</label>
                            <textarea class="form-control" aria-label="With textarea" name="intro"></textarea>
                        </div>
                        <!-- <div class="mb-3 col-lg-4">
                        <label class="form-label" for="status">Status </label>
                        <input type="text" class="form-control" id="status" name="status" value="Approved" readonly/>
                        </div> -->
                        <button type="submit" class="btn btn-primary bg-success" name="sub">Register </button>
                        </div>
                    </form>
                
            
            </div>
           
           
            
           

    </div>
    <script>
  function checkname(){
         var name=document.querySelector("#name").value;
         var nameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!nameRegex.test(name)) {
           document.querySelector("#nerror").innerHTML="Write Alphabets Only";
           document.querySelector("#name").style.border="red solid 1px";
        
      }else{
        document.querySelector("#nerror").innerHTML="";
        document.querySelector("#name").style.border="gray solid 2px";
      }
    }
    function checkemail(){
         var email=document.querySelector("#email").value;
         var emailRegex =/^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/;
         if (!emailRegex.test(email)) {
           document.querySelector("#eerror").innerHTML="Must include @ .com";
           document.querySelector("#email").style.border="red solid 1px";
        
      }else{
        document.querySelector("#eerror").innerHTML="";
        document.querySelector("#email").style.border="gray solid 2px";
      }
    }
    function checkcnic(){
         var cnic=document.querySelector("#cnic").value;
         var cnicRegex =/^\d{5}-\d{7}-\d$/;
         if (!cnicRegex.test(cnic)) {
           document.querySelector("#cerror").innerHTML="Only numbers and - includes";
           document.querySelector("#cnic").style.border="red solid 1px";
        
      }else{
        document.querySelector("#cerror").innerHTML="";
        document.querySelector("#cnic").style.border="gray solid 2px";
      }
    }
    function checkmob(){
         var phoneno=document.querySelector("#phoneno").value;
         var phonenoRegex =/^\+92\d{10}$|^(03\d{9})$|^(9\d{8})$/;
         if (!phonenoRegex.test(phoneno)) {
           document.querySelector("#merror").innerHTML="Write Numbers Only";
           document.querySelector("#phoneno").style.border="red solid 1px";
        
      }else{
        document.querySelector("#merror").innerHTML="";
        document.querySelector("#phoneno").style.border="gray solid 2px";
      }
    }
    function checkpassword(){
         var password=document.querySelector("#password").value;
         var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/;
         if (!passwordRegex.test(password)) {
           document.querySelector("#perror").innerHTML="Only 8 characters with no. and alphabets";
           document.querySelector("#password").style.border="red solid 1px";
        
      }else{
        document.querySelector("#perror").innerHTML="";
        document.querySelector("#password").style.border="gray solid 2px";
      }
    }
    document.getElementById("togglePassword").addEventListener("click", function() {
  var passwordField = document.getElementById("password");
  if (passwordField.type === "password") {
    passwordField.type = "text";
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  }
});
function checkexp(){
         var exp=document.querySelector("#exp").value;
         var expRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!expRegex.test(exp)) {
           document.querySelector("#exerror").innerHTML="Write Alphabets Only";
           document.querySelector("#exp").style.border="red solid 1px";
        
      }else{
        document.querySelector("#exerror").innerHTML="";
        document.querySelector("#exp").style.border="gray solid 2px";
      }
    }
    function checkexpyear(){
         var expyear=document.querySelector("#expyear").value;
         var expyearRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!expyearRegex.test(exp)) {
           document.querySelector("#yerror").innerHTML="Write Alphabets Only";
           document.querySelector("#expyear").style.border="red solid 1px";
        
      }else{
        document.querySelector("#yerror").innerHTML="";
        document.querySelector("#expyear").style.border="gray solid 2px";
      }
    } 
    
</script>

    
    <!-- Form End -->

    <?php include ('./include/footer.php'); ?>