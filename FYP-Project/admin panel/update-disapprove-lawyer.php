<?php
include ('./include/connection.php');
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
$subject=@"Rejection Mail";
$message=@"Your request for approval has been rejected.There are some invalid detail u provide . Please try later with accurate details.THANK YOU!";



$mail =new PHPMailer(true);

//SMTP Settings                           
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "rizwanaarif448@gmail.com"; //enter you email address
$mail->Password ='wyyf zzit mydr dbrn'; //enter you email password
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

//Email Settings
$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->addAddress($email); //enter you email address
$mail->Subject = ($subject);
$mail->Body = $message;

if ($mail->send()) {
$usql="UPDATE `lawyers-rec` SET `status`='disapproved' ,`qrcode`=' ' , `reg_id`=' ' WHERE `lawyerid`='$lid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    echo "<script>alert('Lawyer status has been changed in disapproved')</script>";
        header("Refresh:0, url=./disapproved-lawyers.php");
}else {
    echo "<script>alert('Lawyer status has not been changed in disapproved')</script>";

}
}
?>