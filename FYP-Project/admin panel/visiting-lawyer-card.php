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
      body{
         font-family: "Montserrat" , sans-serif;
         background-color: #ccc;
      }
      .card-wrapper{
         margin-top: 10%;
         margin-left: 30%;
         position: absolute;
         /* left: 50%;
         right: 50%; */
         /* transform: translate(-50%,-50%); */
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
   </style>
</head>
<body>
   <div class="card-wrapper">
      <div class="card">
         <div class="card-front">
            <div class="left">
               <img src="https://apksos.com/storage/images/com/qrcodescanner/online/com.qrcodescanner.online_1.png" >
            </div>
            <div class="right">
               <div class="person right-content">
                  <i class="fa-solid fa-user-tie"></i>
                  <div>
                     <h4>Rizwana Arif</h4>
                     <span>Full Stack Developer</span>
                  </div>
               </div>
               <div class="phone right-content">
                  <i class="fa-solid fa-phone"></i>
                  <div>
                     <p>+923008734780</p>
                     <p>+923059876500</p>
                  </div>
               </div>
               <div class="email right-content">
                  <i class="fa-solid fa-envelope-open"></i>
                  <div>
                     <p>rizwanaarif@gmail.com</p>
                  </div>
               </div>
               <div class="address right-content">
                  <i class="fa-solid fa-globe"></i>
                  <div>
                     <p>jaranwala road </p>
                     <p>Faisalabd</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>