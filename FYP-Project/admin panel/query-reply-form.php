<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['cemail']) && empty($_SESSION['uemail']) ){
    header("location:./login.php");
}
$queryid=$_GET['queryid'];
$lawyeremail=$_SESSION['email'];
if(isset($_POST['sub'])){
    $sql="SELECT * FROM `query-rec` WHERE `queryid`='$queryid'";
    $run=mysqli_query($conn,$sql);
    $fet=mysqli_fetch_assoc($run);
    $email=$fet['email'];
    //start mail processing.
    $to=$email;
    $subject=mysqli_real_escape_string($conn,$_POST['subject']);
    $message=mysqli_real_escape_string($conn,$_POST['message']);
    $from="akbarsaba222@gmail.com";
    $headers="From:$from";
    if(mail($to,$subject,$message,$headers)){
        $usql="UPDATE `query-rec` SET `status`='replyed' WHERE `queryid`='$queryid'";
        $urun=mysqli_query($conn,$usql);
        if($urun){
        echo ("<script> alert ('Successfully ! Send a mail.') </script>");
        header("Refresh:0 ,url='replyed-query'");
    }
    else{
        echo ("<script> alert ('Failed to ! Send a mail.') </script>");
    }

}
}

include ('./include/header.php');
// include ('./include/sidebar.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<body>
    <div class="container-fluid main pt-4 px-4 ">
        
          
                <div class="bg-light rounded h-100 p-4 w-50 ">
                    <h4 class="mb-4 d-flex justify-content-center text-success">Send Replay</h4>
                    <form  method="post" enctype="multipart/form-data">
            <div class="row g-4 ">
                        <div class="mb-3 col-lg-12">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" oninput="checkname()">
                            <span id="nerror" style="color:red;font-size:15px"></span>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label">Write Message Here</label>
                            <textarea class="form-control" aria-label="With textarea" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary bg-success w-100" name="sub">Send reply</button>
                        </div>
                    </form>
                
            
            </div>
           
           
            
           

    </div>
    <script>
  function checkname(){
         var name=document.querySelector("#subject").value;
         var nameRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!nameRegex.test(name)) {
           document.querySelector("#nerror").innerHTML="Write Alphabets Only";
           document.querySelector("#subject").style.border="red solid 1px";
        
      }else{
        document.querySelector("#nerror").innerHTML="";
        document.querySelector("#subject").style.border="gray solid 2px";
      }
    }
    
    
</script>

    
    <!-- Form End -->

    <?php include ('./include/footer.php'); ?>