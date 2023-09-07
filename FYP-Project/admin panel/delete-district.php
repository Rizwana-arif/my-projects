<?php

include ("./include/connection.php");
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
$del=$_GET['did'];
$sql="DELETE FROM `district-rec` WHERE `did`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./district.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>