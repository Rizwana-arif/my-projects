<?php
include ('../Admin/include/connection.php');
session_start();
 $email=$_SESSION['email'];
// echo  $p_code =$_POST['p_code'];

if(@$_POST['p_code']!=""){
    if($email==""){
        echo 1;
    }
    else{
        $p_id=mysqli_real_escape_string($conn,$_POST['p_id']);
        $p_name=mysqli_real_escape_string($conn,$_POST['p_name']);
        $p_price=mysqli_real_escape_string($conn,$_POST['p_price']);
        $total_price=mysqli_real_escape_string($conn,$_POST['total_price']);
         $p_code=mysqli_real_escape_string($conn,$_POST['p_code']);
         $p_pic=mysqli_real_escape_string($conn,$_POST['p_pic']);
         $email=mysqli_real_escape_string($conn,$_POST['email']);
        $qty=1;
         $sql="SELECT * FROM `cart-rec` WHERE `p_code`='$p_code' AND `email`='$email'";
        $run=mysqli_query($conn,$sql);
        // $fet=mysqli_fetch_assoc($run);
        if(mysqli_num_rows($run)>0){
            echo 2;
        }else{
            $isql="INSERT INTO `cart-rec` (`p_id`,`p_name`,`p_price`,`total_price`,`p_code`,`p_pic`,`email`,`qty`) VALUES ('$p_id','$p_name','$p_price','$total_price','$p_code','$p_pic','$email','$qty')";
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
if(!empty($_POST['mycart'])){
    $count="SELECT * FROM `cart-rec` WHERE `email`='$email'";
    $run=mysqli_query($conn,$count);
    echo $c=mysqli_num_rows($run);
    
}
if(!empty($_POST['delete'])){
    $d=$_POST['delete'];
    $dsql="DELETE FROM `cart-rec` WHERE `cart_id`='$d'";
    $run=mysqli_query($conn,$dsql);
    if($run){
   
        echo 1;
    }else{
     echo 2;
    }

}
if(isset($_POST['action']) && $_POST['action']=="delete"){
   
    $dsql="DELETE FROM `cart-rec`";
    $run=mysqli_query($conn,$dsql);
    if($run){
   
        echo 1;
    }else{
     echo 2;
    }
}
if(isset($_POST['cart_id'])){
    $cart_id=mysqli_real_escape_string($conn,$_POST['cart_id']);
    $p_price=mysqli_real_escape_string($conn,$_POST['p_price']);
    $qty=mysqli_real_escape_string($conn,$_POST['qty']);
   $t=$qty*$p_price;
   $usql="UPDATE `cart-rec` SET `total_price`='$t' , `qty`='$qty' WHERE `email`='$email' AND `cart_id`='$cart_id'";
   $urun=mysqli_query($conn,$usql);
   if($urun){
    echo 1;
   }else{
    echo 2;
   }
}
?>