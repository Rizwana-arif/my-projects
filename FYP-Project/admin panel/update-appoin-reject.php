<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
} 
$appoinid=$_GET['appoinid'];
$ssql="SELECT * FROM `appointment-rec` WHERE `appoinid`='$appoinid'";
$srun=mysqli_query($conn,$ssql);
$fet=mysqli_fetch_assoc($srun);
//  $lawyern=$fet['clawyer'];
 $clientn=$fet['clname'];
// $lawyer=$_SESSION['lawyerid'];
// $cemail=$_SESSION['cemail'];
$usql="UPDATE `appointment-rec` SET `sta`='reject' WHERE `appoinid`='$appoinid'";
$urun=mysqli_query($conn,$usql);
if($urun){
    $sql="UPDATE `clients-rec` SET `assign_lawyer`='' WHERE `cname`='$clientn' ";
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert('Successfully!Clients moved into reject list.')</script>";
    header("Refresh:0, url=./appointment-records.php");
 }
    
}else {
    echo "<script>alert('Failed !Clients moved into reject list.')</script>";


}
?>