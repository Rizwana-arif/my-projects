<?php
//  use PHPMailer\PHPMailer\PHPMailer;
//  use PHPMailer\PHPMailer\SMTP;
//  use PHPMailer\PHPMailer\Exception;
//  require "./PHPMailer/PHPMailer.php";
// require "./PHPMailer/SMTP.php";
// require "./PHPMailer/Exception.php";

include ('./include/connection.php');
session_start();
if( empty($_SESSION['user_Email'])){
    header("location:./login.php");
} 
$userid=$_GET['client_email'];
// $ssql="SELECT * FROM `appointment-rec` WHERE `appoinid`='$appoinid'";
// $srun=mysqli_query($conn,$ssql);
// $fet=mysqli_fetch_assoc($srun);
//  $lawyern=$fet['lawyer_name'];
//  $clientn=$fet['client_name'];
//  $email=$fet['client_email'];

//   $name=@"Admin";
//   $email=@$email;
//   $subject=@"Rejection Mail";
//   $message=@"Your request for appointment with a lawyer is rejected! sorry ,plz try later.";



// $mail =new PHPMailer(true);

// //SMTP Settings                           
// $mail->isSMTP();
// $mail->Host = "smtp.gmail.com";
// $mail->SMTPAuth = true;
// $mail->Username = "rizwanaarif448@gmail.com"; //enter you email address
// $mail->Password ='kdrhsicexdwjqljq'; //enter you email password
// $mail->Port = 465;
// $mail->SMTPSecure = "ssl";

// //Email Settings
// $mail->isHTML(true);
// $mail->setFrom($email, $name);
// $mail->addAddress($email); //enter you email address
// $mail->Subject = ($subject);
// $mail->Body = $message;

// if ($mail->send()) {

$usql="UPDATE `appointment-rec` SET `statuss`='unaccepted' WHERE `client_email`='$userid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    $sql="UPDATE `users-rec` SET `assign_lawyer`='' WHERE `user_Email`='$userid' ";
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert('Case completion msg sent.')</script>";
    header("Refresh:0, url=./index.php");
 }
    
}else {
    echo "<script>alert('Failed!Msg not sent.')</script>";


}


?>
