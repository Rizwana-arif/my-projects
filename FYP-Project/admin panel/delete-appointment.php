<?php

include ("./include/connection.php");
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
$del=$_GET['appoinid'];
$sql="DELETE FROM `appointment-rec` WHERE `appoinid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./index.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>