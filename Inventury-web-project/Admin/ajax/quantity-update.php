<?php 
include ("../include/connection.php");
$quaid=mysqli_real_escape_string($conn,$_POST['quaid']);
$sql="SELECT * FROM `quantity-rec` WHERE `quaid`='$quaid'";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);

    $quaname=strtolower(mysqli_real_escape_string($conn,$_POST['quaname']));
    $quadescrip=mysqli_real_escape_string($conn,$_POST['quadescrip']);
    $quadate=date ("m-d-y");
    $usql="UPDATE `quantity-rec` SET `quaname`='$quaname', `quadescrip`='$quadescrip' , `quadate`='$quadate' WHERE `quaid`='$quaid'";
    $urun=mysqli_query($conn,$usql);
    if ($urun){
        echo 1;
      }
      else{
        echo 2;
      }

?>