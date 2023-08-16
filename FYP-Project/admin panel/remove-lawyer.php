<?php

include ("./include/connection.php");
 $del=$_GET['lawyerid'];
$sql="SELECT `profile_image` , `bar_license` FROM `lawyers-rec` WHERE `lawyerid`='$del'" ;
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_assoc($run);
unlink("./data/lawyer-image/" .$fet['profile_image']);
unlink("./data/bar-license/" .$fet['bar_license']);

$dsql="DELETE FROM `lawyers-rec` WHERE `lawyerid`='$del'";
$run=mysqli_query($conn,$dsql);
if($run){
    echo "<script>alert('Lawyer record has been deleted')</script>";
    header("Refresh:0, url=./index.php");
}
else{
    echo "<script>alert('Failed ! Lawyer record has not been deleted')</script>";
    
}
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/footer.php");
?>
