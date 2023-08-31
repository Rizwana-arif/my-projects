<?php

include ("./include/connection.php");
session_start();
if(empty($_SESSION['email']) && empty($_SESSION['lawyer_email'])){
    header("location:./login.php");
}
$del=$_GET['queryid'];
$sql="DELETE FROM `query-rec` WHERE `queryid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./index.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>