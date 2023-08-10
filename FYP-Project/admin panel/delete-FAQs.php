<?php

include ("./include/connection.php");
$del=$_GET['FAQid'];
$sql="DELETE FROM `FAQs-rec` WHERE `FAQid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./FAQs.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>