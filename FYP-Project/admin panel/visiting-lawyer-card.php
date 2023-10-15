<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email'])){
    header("location:./login.php");
} 
$lawyer=$_SESSION['lawyer_email'];
$sql="SELECT * FROM `lawyers-rec` l INNER JOIN `case-type` c ON l.speciality=c.caseid WHERE `status`='approved' AND `lawyer_email`='$lawyer'";
$run=mysqli_query($conn,$sql);
$lfet=mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
   

   <title>Document</title>
   <style>
      *{
    margin: 0%;
    padding: 0%;
 }
 @media print {
    body {
      margin: 0;
      padding: 0;
      text-align: center; /* Center the content within the page */
    }

    .card-wrapper {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%); /* Center the card both horizontally and vertically on the printed page */
    }
  }

 body{
    font-family: "Montserrat" , sans-serif;
    
 }
 #div {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
 
}
 .card-wrapper{
    perspective : 1000px;
  
 }
 .card{
    width: 550px;
    height: 300px;
    background-color: #fff;
    transform-style: preserve-3d;
    position: relative;
    box-shadow: 0px 15px 60px rgba(0 , 0 ,0 , 0.3);
    border-radius: 15px;
    transition: transform 1s;
    justify-content: center;
 }
 .card-wrapper:hover .card{
    transform : rotateX('-360deg');
 }
 .card-front{
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: inherit;
    display: flex;
    background: linear-gradient(100deg,
    rgb(255,255,255) 40% ,
    rgb(38,38,38) 0);
 }
 .left{
    width: 40%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
 }
 .left img{
    width: 80%;
 }
 .right h4{
    margin: 10px;
    font-size: 18px;
    letter-spacing: 1px;
 }
 .right{
    width: 60%;
    color: #fff;
 }
 .right-content{
    display: flex;
    align-items: center;
    margin: 10px 0;
 }
 .person{
    background: linear-gradient(90deg,rgb(187,187,187) 8% , rgb(170, 145, 102) 0);
    padding: 5px 0px 5px 60px;
    margin: 30px 0px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    clip-path: polygon(100% 11%, 100% 50%,100% 89%, 25% 100%,0% 50%,25% 0%);
 }
 .right-content i{
    width: 35px;
    height: 35px;
    border: 2px solid #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #aa9166;
    margin-right: 20px;
 }
 .person h4{
    text-transform: uppercase;
 }
 .phone{
    padding-left: 30px;
 }
 .email{
    padding-left: 20px;
 }
 .address{
    padding-left: 10px;
 }
/* CSS for the navbar */
.navbar {
    background-color: #333; /* Background color of the navbar */
    padding: 10px 0; /* Padding at the top and bottom of the navbar */
    text-align: center; /* Center align the content within the navbar */
}

/* CSS for the Print button */
#printButton {
    background-color: #f44336; /* Button background color */
    color: #fff; /* Button text color */
    border: none; /* Remove button border */
    padding: 10px 20px; /* Button padding */
    font-size: 16px; /* Button text size */
    cursor: pointer; /* Show pointer cursor on hover */
    border-radius: 5px; /* Add rounded corners to the button */
}

/* Style the button on hover */
#printButton:hover {
    background-color: #d32f2f; /* Change button background color on hover */
}



      </style>
</head>
<body>
   <div class="navbar">
   <div class="container">
      <button id="printButton" onclick="printDiv()">Print</button>
   </div>
   </div>
   <div id="div">
   <div class="card-wrapper">
      <div class="card">
         <div class="card-front">
            <div class="left">
               <img src="<?php echo  $lfet['qrcode']; ?>" >
            </div>
            <div class="right">
               <div class="person right-content">
                  <i class="fa-solid fa-user-tie"></i>
                  <div>
                     <h4><?php echo $lfet['first_Name'] . " " . $lfet['last_Name']; ?></h4>
                     <span><?php echo $lfet['casetype']; ?></span>
                  </div>
               </div>
               <div class="phone right-content">
                  <i class="fa-solid fa-phone"></i>
                  <div>
                     <p><?php echo $lfet['contact_number']; ?></p>
                     
                  </div>
               </div>
               <div class="email right-content">
                  <i class="fa-solid fa-envelope-open"></i>
                  <div>
                     <p><?php echo $lfet['lawyer_email']; ?></p>
                  </div>
               </div>
               <div class="address right-content">
                  <i class="fa-solid fa-globe"></i>
                  <div>
                     <p><?php echo $lfet['full_address']; ?> </p>
                     <p><?php echo $lfet['city']; ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>


   <script>
      function printDiv(){
    var printinvoice= document.getElementById("div").innerHTML;
    console.log(printinvoice);
    var print= document.body.innerHTML;
       document.body.innerHTML= printinvoice;
    window.print();
    document.body.innerHTML = print;
    location.reload(true);
    window.location.href = "./index.php"; 
  }
</script>
   <!-- <script>
function printDIV(){
   var printinvoice=document.getElementById
}
      </script> -->
</body>
</html>