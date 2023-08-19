<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email'])){
    header("location:./login.php");
} 
$appoinid=$_GET['appoinid'];
$ssql="SELECT * FROM `appointment-rec` WHERE `appoinid`='$appoinid'";
$srun=mysqli_query($conn,$ssql);
$fet=mysqli_fetch_assoc($srun);
//  $lawyern=$fet['clawyer'];
 $clientn=$fet['client_name'];
// $lawyer=$_SESSION['lawyerid'];
// $cemail=$_SESSION['cemail'];
$usql="UPDATE `appointment-rec` SET `statuss`='reject' WHERE `appoinid`='$appoinid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    $sql="UPDATE `users-rec` SET `assign_lawyer`='' WHERE `first_Name`='$clientn' ";
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert('Successfully!Clients moved into reject list.')</script>";
    header("Refresh:0, url=./appointment-records.php");
 }
    
}else {
    echo "<script>alert('Failed !Clients moved into reject list.')</script>";


}
?>