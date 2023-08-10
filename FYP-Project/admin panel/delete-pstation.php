<?php

include ("./include/connection.php");
$del=$_GET['pstationid'];
$sql="DELETE FROM `pstation-rec` WHERE `pstationid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./add-pstation.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>