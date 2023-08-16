<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 
$lawyerid=$_GET['lawyerid'];
$usql="UPDATE `lawyers-rec` SET `status`='unapproved' WHERE `lawyerid`='$lawyerid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    echo "<script>alert('Lawyer status has been changed in disapproved')</script>";
        header("Refresh:0, url=./disapproved-lawyers.php");
}else {
    echo "<script>alert('Lawyer status has not been changed in disapproved')</script>";

}
?>