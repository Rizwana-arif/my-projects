<?php
include ("../include/connection.php");
$supid=mysqli_real_escape_string($conn,$_POST['supid']);
$sql="SELECT * FROM `supplier-rec` WHERE `supid`='$supid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);

    $supname=strtolower(mysqli_real_escape_string($conn,$_POST['supname']));
    $supemail=mysqli_real_escape_string($conn,$_POST['supemail']);
    $supnum=mysqli_real_escape_string($conn,$_POST['supnum']);
    $supdate=date ("m-d-y");
    $usql="UPDATE `supplier-rec` SET `supname`='$supname', `supemail`='$supemail' ,`supnum`='$supnum', `supdate`='$supdate' WHERE `supid`='$supid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo 1;
      }
      else{
        echo 2;
      }

?>