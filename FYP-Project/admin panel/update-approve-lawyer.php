<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 
$lid=$_GET['lawyerid'];
$usql="UPDATE `lawyers-rec` SET `status`='approved' WHERE `lawyerid`='$lid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    echo "<script>alert('Lawyer status has been changed in approved')</script>";
        header("Refresh:0, url=./approved-lawyers.php");
}else {
    echo "<script>alert('Lawyer status has not been changed in approved')</script>";

}
?>