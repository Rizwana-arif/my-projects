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
$userid=$_GET['uid'];
$usql="SELECT * FROM `add-case-bylawyers` WHERE `client_name`='$userid'";
$urun=mysqli_query($conn,$usql);
$fet=mysqli_fetch_assoc($urun);
 $cstatus=$fet['case_condition'];
if($cstatus=='Processing'){
    echo "<script>alert('Case completion msg sent.')</script>";
    header("Refresh:0, url=./index.php");
 }else {
    $sql="UPDATE `users-rec` SET `assign_lawyer`='' WHERE `userid`='$userid' ";
    $run=mysqli_query($conn,$sql);
    if($run){
        echo "<script>alert('All cases completed.')</script>";
        header("Refresh:0, url=./index.php");
     }

}


?>
