<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 
$appoinid=$_GET['appoinid'];
$usql="UPDATE `appointment-rec` SET `sta`='accept' WHERE `appoinid`='$appoinid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    echo "<script>alert('Appointment Request has been accepted')</script>";
        header("Refresh:0, url=./appointment-accept.php");
}else {
    echo "<script>alert('Appointment Request has not been accepted')</script>";

}
?>