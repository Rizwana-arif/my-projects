<?php
include ('../Admin/include/connection.php');
session_start();
 $myemail=$_SESSION['email'];
// echo  $p_code =$_POST['p_code'];

if(@$_POST['p_code']!=""){
    if($myemail==""){
        echo 1;
    }
    else{
        $p_id=mysqli_real_escape_string($conn,$_POST['p_id']);
        $p_name=mysqli_real_escape_string($conn,$_POST['p_name']);
        $p_price=mysqli_real_escape_string($conn,$_POST['p_price']);
        $p_code=mysqli_real_escape_string($conn,$_POST['p_code']);
        $p_pic=mysqli_real_escape_string($conn,$_POST['p_pic']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $qty=1;
        $sql="SELECT * FROM `cart-rec` WHERE `p_code`='$p_code' AND `email`='$email'";
        $run=mysqli_query($conn,$sql);
        if($run){
            echo 2;
        }else{
            $isql="INSERT INTO `cart-rec` (`p_id`,`p_name`,`p_price`,`p_code`,`p_pic`,`email`,`qty`) VALUES ('$p_id','$p_name','$p_price','$p_code','$p_pic','$email','$qty')";
            $irun=mysqli_query($conn,$isql);
            if($irun){
                echo 3;
            }
            else{
                echo 4;
            }
        }
    }
   
}

?>