<?php
include ('./include/connection.php');
session_start();
// if(empty($_SESSION['email']) && empty($_SESSION['lawyer_email']) && empty($_SESSION['user_Email'])){
//   header("location:../admin panel/login.php");
// }

include ('./include/header.php');


?>

<head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<style>
       body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 2px 1px 3px 2px rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 2px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: 2px!important;
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

    <div class="navbar">
   <div class="container">
      <button id="printButton" onclick="showscan()">Scan QR Code</button>
   </div>
   </div>
   <div class="container">
            <div class="row">
                <div class="col-md-12 " id="vid">
                    <video id="preview" width="50%"></video>
                </div>
                <div class="col-md-6">
                    
                    <input type="hidden" name="text" id="text" readonly="" placeholder="scan qrcode" class="form-control">
                </div>
            </div>
            <div class="container">
        <div class="main-body" id="profile">

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
         function showscan(){
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('text').value=c;
               scannedData=c;
               
               $.ajax({
            url: "./scan-profile-ajax.php",
            type: "POST",
            data: {codeqr : scannedData},
            success: function(res){
               
			$("#profile").html(res);
            // $("#vid").hide();
                $("#vid").css("display", "none");
            },
            error: function(xhr, status , error){
                console.error ("AJAX Error:" , error);
            }

            
        });
           });
         }

        </script>


 