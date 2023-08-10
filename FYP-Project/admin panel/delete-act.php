<?php

include ("./include/connection.php");
$del=$_GET['actid'];
$sql="DELETE FROM `act-rec` WHERE `actid`='$del'";
$run=mysqli_query($conn,$sql);

if($run){

    header("refresh:0, url=./add-act.php");
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>