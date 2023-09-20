<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])  && empty($_SESSION['lawyer_email']) ){
  header("location:./login.php");
}
$pro=$_GET['queryid'];
$sql="SELECT * FROM `query-rec` WHERE `queryid`='$pro'";
$run=mysqli_query($conn,$sql);
$qfet=mysqli_fetch_assoc($run);
include ('./include/header.php');
include ('./include/sidebar.php');

?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
    justify-content: center;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="main-body">
        
            
              <!-- <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2></h2>
                        </div>
                    </div>
                </div>
            </div> -->
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
               
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                    <h4 align=center>Query Detail</h4>
                    <hr>
                    <h5 align=center >Status Of Request  : <?php echo $qfet['status']; ?></h6> 
                    <hr>
                        <h5 >Questionarr Detail</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $qfet['name'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $qfet['email']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile No.</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $qfet['mobno']; ?>
                        </div>
                      </div>
                      <hr>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Question / Query</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $qfet['query']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Answer / Reply</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $qfet['reply']?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Answer_By</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $qfet['reply_by']; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 align=center >Date    : <?php echo $qfet['date']; ?></h6> 

                      <hr>
                     
                     
                    
                    </div>
                  </div>
    
                 
    
    
    
                </div>
              </div>
    
            </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>