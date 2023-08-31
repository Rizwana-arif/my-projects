<?php
  include ('./include/connection.php');
  session_start();
  if(empty($_SESSION['lawyer_email']) ){
    header("location:./login.php");
  }
  $pro=$_GET['lawyerid'];
       $sql="SELECT * FROM `lawyers-rec` WHERE `lawyerid`='$pro'";
       $run=mysqli_query($conn,$sql);
       $fet=mysqli_fetch_assoc($run);
  if(isset($_POST['sub'])){
    $first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
    $last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
    $user_Email=mysqli_real_escape_string($conn,$_POST['user_Email']);
	  $password=mysqli_real_escape_string($conn,$_POST['password']);
    $contact_number=mysqli_real_escape_string($conn,$_POST['contact_number']);
	  @$image=$_FILES['image']['name'];
    $full_address=mysqli_real_escape_string($conn,$_POST['full_address']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $zip_code=mysqli_real_escape_string($conn,$_POST['zip_code']);
    // $agree=mysqli_real_escape_string($conn,$_POST['agree']);   
      if(!empty($image)){
          $a=strtolower(pathinfo($image,PATHINFO_EXTENSION));
          $arr=array("png","jpg","jpeg");
          if(in_array($a,$arr)){
              unlink("./data/user-img/".$fet['image']);
              $pi=rand(10000,90000).".".$a;
              $sql="UPDATE `users-rec` SET `first_name`='$first_name',`last_name`='$last_name',`user_Email`='$user_Email',`password`='$password',`contact_number`='$contact_number',`image`='$pi',`full_address`='$full_address' , `city`='$city' , `zip_code`='$zip_code'  WHERE `userid`='$userid'";
              $run=mysqli_query($conn,$sql);
              if($run){
                  move_uploaded_file($_FILES['image']['tmp_name'],"./data/user-img/".$pi);
        			echo "<script>alert('Data has been updated')</script>";
                     header("Refresh:2, url=./users-profile.php");
                 }else{
					echo "<script>alert('Data has not been updated')</script>";
                 }
          }else{
			echo "<script>alert('Image is invalid')</script>";
             }
       }else{
          $pi=$fet['image'];
		  $sql="UPDATE `users-rec` SET `first_name`='$first_name',`last_name`='$last_name',`user_Email`='$user_Email',`password`='$password',`contact_number`='$contact_number',`image`='$pi',`full_address`='$full_address' , `city`='$city' , `zip_code`='$zip_code'  WHERE `userid`='$userid'";
          $run=mysqli_query($conn,$sql);
          if($run){
			echo "<script>alert('Data has  been updated but images is not selected')</script>";
			header("Refresh:2, url=./users-profile.php");
          }else{
			echo "<script>alert('Data has not been updated')</script>";
            }
       }
  
  
  }
  include ('./include/header.php');
  include ('./include/sidebar.php');
?>