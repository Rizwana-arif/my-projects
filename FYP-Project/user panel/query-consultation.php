<?php 
include ('./include/connection.php');
// session_start();
// if(empty($_SESSION['email'])){
//     header("location:./login.php");
// }
if(isset($_POST['sub'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $mobno=mysqli_real_escape_string($conn,$_POST['mobno']);
    $query=mysqli_real_escape_string($conn,$_POST['query']);
    $status="not replyed";
    $date=date("d-m-y");

        $sql="INSERT INTO `query-rec`(`name`,`email`, `mobno`,`query`,`status`,`date`) VALUES ('$name','$email','$mobno','$query','$status','$date')";
        $run=mysqli_query($conn,$sql);
        if($run){

          header("Refresh:0, url=./index.php");
            echo "<script>alert ('Successfully ! Query has been sent')</script>";
           
        }
        else{
            echo "<script>alert ('Failed! to sent Query.')</script>";
        }
    }

include ('./include/header.php');

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
.main{
 margin-left : 300px;
 
}

</style>
<body>
    <div class="container-fluid main pt-4 px-4 ">
        
          
                <div class="bg-light rounded h-100 p-4 w-50 ">
                    <h4 class="mb-4 d-flex justify-content-center text-success">Send Query</h4>
                    <form  method="post" enctype="multipart/form-data">
            <div class="row g-4 ">
                        <div class="mb-3 col-lg-12">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" oninput="checkname()"/>
                            <span id="nerror" style="color:red;font-size:15px"></span>

                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" oninput="checkemail()">
                                <span id="eerror" style="color:red;font-size:15px"></span>
                            </div>
                    
                        
                        <div class="mb-3 col-lg-12">
                            <label for="mobno" class="form-label">Mobile No.</label>
                            <input type="text" class="form-control" id="mobno" name="mobno" oninput="checkmob()">
                            <span id="merror" style="color:red;font-size:15px"></span>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Write Query Here</label>
                            <textarea class="form-control" aria-label="With textarea" name="query"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary bg-success w-100" name="sub">Send Query</button>
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
   
    function checkmob(){
         var phoneno=document.querySelector("#mobno").value;
         var phonenoRegex =/^\+92\d{10}$|^(03\d{9})$|^(9\d{8})$/;
         if (!phonenoRegex.test(phoneno)) {
           document.querySelector("#merror").innerHTML="Write Numbers Only";
           document.querySelector("#mobno").style.border="red solid 1px";
        
      }else{
        document.querySelector("#merror").innerHTML="";
        document.querySelector("#mobno").style.border="gray solid 2px";
      }
    }

    
</script>

    
    <!-- Form End -->

    <?php include ('./include/footer.php'); ?>