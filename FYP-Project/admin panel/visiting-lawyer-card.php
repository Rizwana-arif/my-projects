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
   <link rel="stylesheet" type="text/css"  href="./css/print.css">

   <title>Document</title>
   <style>
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
      <button id="printButton">Print</button>
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
                     <p>+923059876500</p>
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
        // Function to print the card
        function printCard() {
            var cardToPrint = document.getElementById('div');
            var printWindow = window.open('', '', 'width=600,height=400');
            printWindow.document.open();
            printWindow.document.write('<html><head><title>Print</title></head><body>');
            printWindow.document.write('<link rel="stylesheet" type="text/css" href="./css/print.css">'); // Link to the print-specific stylesheet
            printWindow.document.write('<div class="card-wrapper">' + cardToPrint.innerHTML + '</div>');
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
            printWindow.close();
        }

        // Attach the print function to the print button
        document.getElementById('printButton').addEventListener('click', printCard);
    </script>
   <!-- <script>
function printDIV(){
   var printinvoice=document.getElementById
}
      </script> -->
</body>
</html>