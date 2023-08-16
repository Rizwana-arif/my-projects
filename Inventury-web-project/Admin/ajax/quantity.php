<?php 
include ("../include/connection.php");
session_start();
if(empty($_SESSION['email'])){
  header("location:./login.php");
}

  $quaname=strtolower(mysqli_real_escape_string($conn,$_POST['quaname']));
$quadescrip=mysqli_real_escape_string($conn,$_POST['quadescrip']);
$quadate=date ("m-d-y");
  $sql="INSERT INTO `quantity-rec` (`quaname`,`quadescrip`,`quadate`) VALUES ('$quaname','$quadescrip','$quadate')";
  $run=mysqli_query($conn,$sql);
  if ($run){
    echo 1;
  }
  else{
    echo 2;
  }

?>