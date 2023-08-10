<?php

include ("./include/connection.php");
$del=$_GET['queryid'];
$sql="DELETE FROM `query-rec` WHERE `queryid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./not-replyed-query-admin.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>