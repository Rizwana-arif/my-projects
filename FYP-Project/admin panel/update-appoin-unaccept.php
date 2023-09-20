<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['lawyer_email'])){
    header("location:./login.php");
} 
$appoinid=$_GET['appoinid'];
$usql="UPDATE `appointment-rec` SET `statuss`='pending' WHERE `appoinid`='$appoinid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    echo "<script>alert('Appointment Request has been moved in panding')</script>";
        header("Refresh:0, url=./unaccepted-appointments.php");
}else {
    echo "<script>alert('Appointment Request has not been moved in panding')</script>";

}


?>