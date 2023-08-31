<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])  && empty($_SESSION['lawyer_email']) ){
  header("location:./login.php");
}
$pro=$_GET['appoinid'];
$sql="SELECT * FROM `appointment-rec` a INNER JOIN `lawyers-rec` l ON  a.lawyer_name=l.lawyerid INNER JOIN `case-type` c ON a.case_category=c.caseid where `appoinid`='$pro'";

    $run=mysqli_query($conn,$sql);
    $fet=mysqli_fetch_assoc($run);
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
                    <h4 align=center>Appointment Details</h4>
                    <hr>
                    <h5 align=center >Status Of Request  : <?php echo $fet['statuss']; ?></h6> 
                    <hr>
                        <h5 >User Detail</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['client_name'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['client_email']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">CNIC</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['client_cnic']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Contact number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['contact_number']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['gender']?>
                        </div>
                      </div>
                      <hr>
                      <h5>Address Details</h5>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['full_address']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">State</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['state']; ?>
                        </div>
                      </div>
                      <hr>
                     <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">District</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['district']; ?>
                        </div>
                      </div>
                      <hr>
                      <h5>Case Details</h5>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">REF name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['Ref_Name']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Ref Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['Ref_No']; ?>
                        </div>
                      </div>
                      <hr>
                     <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Case Category</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['casetype']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['description']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Requested for (Lawyer Name)</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['first_Name'] . " " . $fet['last_Name']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Date</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['datetime'] ; ?>
                        </div>
                      </div>
                   
                    
                     
                    
                    </div>
                  </div>
    
                 
    
    
    
                </div>
              </div>
    
            </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>