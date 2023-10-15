<?php
include ('./include/connection.php');
session_start();
if( empty($_SESSION['user_Email']) && empty($_SESSION['lawyer_email'])){
    header("location:./login.php");
} 
$case=$_GET['case_id'];
    $sql="UPDATE `add-case-bylawyers` SET `case_condition`='Losing' WHERE `case_id`='$case' ";
    $run=mysqli_query($conn,$sql);
    if($run){
        echo "<script>alert('Case Status has been changed in processing.')</script>";
        // header("Refresh:0, url=./index.php");
     }


?>
