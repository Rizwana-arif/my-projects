<?php 
include ('./include/connection.php');
session_start();
if( empty($_SESSION['lawyer_email'])  ){
    header("location:./login.php");
}
$queryid=$_GET['queryid'];

$sql="SELECT * FROM `query-rec` WHERE `queryid`='$queryid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
$email=$fet['email'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['sub']))
{
  $name=@$_POST["name"];
  $email=@$email;
  $subject=@$_POST["subject"];
  $message=@$_POST["message"];


require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

$mail =new PHPMailer(true);

//SMTP Settings                           
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "rizwanaarif448@gmail.com"; //enter you email address
$mail->Password ='kdrhsicexdwjqljq'; //enter you email password
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

//Email Settings
$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->addAddress($email); //enter you email address
$mail->Subject = ($subject);
$mail->Body = $message;

if ($mail->send()) {
  $usql="UPDATE `query-rec` SET `status`='replyed' , `reply`='$subject' , `reply_by`='$name'  WHERE `queryid`='$queryid'";
  $urun=mysqli_query($conn,$usql);
  if($urun){
  
      echo "<script>alert('Successfully!Mail sent.')</script>";
      header("Refresh:0, url=./replyed-query.php");
   }
      
  }else {
      echo "<script>alert('Failed! mail is not.')</script>";
  
  
  }
}
		  
       



?>
<html >
<head>
<title>PHPSMTP</title>
<link href="style.css" type="text/css" rel="stylesheet" media="all"/>
<link href="bootstrap-4.1.3-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>
<body>
 <div class="container-fluid">
 <?php echo @$error; ?>
<form class="form" method="post">
  <div class="form-group">
  <label>NAME</label>
    <input type="text" class="form-control"  name="name" >
    <br/>
    <label>ENTER SUBJECT</label>
    <input type="text" class="form-control" placeholder="Enter Subject" name="subject" >
    <br/>
    <label>ENTER MESSAGE</label>
    <textarea type="text" class="form-control" placeholder="Enter Message" name="message" ></textarea>
    <br/>
    
    <br/>
    <button type="submit" class="btn1 btn" name="sub">Submit</button>
  </div>
  </form>

  
  


<script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js" type="text/javascript"></script> 
</body>
</html>

    <?php include ('./include/footer.php'); ?>