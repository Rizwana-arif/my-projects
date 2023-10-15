<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

include ('./include/connection.php');
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['lawyer_email'])){
    header("location:./login.php");
} 
$appoinid=$_GET['appoinid'];
$ssql="SELECT * FROM `appointment-rec` WHERE `appoinid`='$appoinid'";
$srun=mysqli_query($conn,$ssql);
$fet=mysqli_fetch_assoc($srun);
 $lawyern=$fet['lawyer_name'];
 $clientn=$fet['client_name'];
 $email=$fet['client_email'];

  $name=@"Admin";
  $email=@$email;
  $subject=@"Rejection Mail";
  $message=@"Your request for appointment with a lawyer is rejected! sorry ,plz try later.";



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

$usql="UPDATE `appointment-rec` SET `statuss`='reject' WHERE `appoinid`='$appoinid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    $sql="UPDATE `users-rec` SET `assign_lawyer`='' WHERE `first_Name`='$clientn' ";
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert('Appointment is rejected.')</script>";
    header("Refresh:0, url=./index.php");
 }
    
}else {
    echo "<script>alert('Failed!Clients appointment not rejected.')</script>";


}

}else{
    echo "<script>alert('Failed! Mail is not sent.')</script>";

}

?>
