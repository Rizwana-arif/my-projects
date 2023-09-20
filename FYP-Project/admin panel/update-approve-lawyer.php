<?php
include ('./include/connection.php');
require_once './phpqrcode/qrlib.php';
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 
$lid=$_GET['lawyerid'];
$sql="SELECT * FROM `lawyers-rec` WHERE `lawyerid`='$lid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
$email=$fet['lawyer_email'];

use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";
$name=@"Admin";
$email=@$email;
$subject=@"Confirmation Mail";
$message=@"Your request for approval has been accepted.Now you are the part of our firm.";



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
    $value='./img/';
    $qrcode=$value.time().".png";
    $random=rand(99999,999999);
    $reg_id="LAW-" . $random . "-FIRM"; 
    QRcode::png($reg_id,$qrcode,'H',4,4);

$usql="UPDATE `lawyers-rec` SET `status`='approved' , `reg_id`='$reg_id' , `qrcode`='$qrcode' WHERE `lawyerid`='$lid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    echo "<script>alert('Lawyer status has been changed in approved')</script>";
        header("Refresh:0, url=./disapproved-lawyers.php");
}else {
    echo "<script>alert('Lawyer status has not been changed in approved')</script>";

}
}
?>