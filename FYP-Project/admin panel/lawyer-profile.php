<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) ){
  header("location:./login.php");
}
$pro=$_SESSION['lawyer_email'];
    $sql="SELECT * FROM `lawyers-rec` l INNER JOIN `case-type` c ON l.speciality=c.caseid where `lawyer_email`='$pro' ";
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
        
            
              <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2><?php echo $fet['first_Name']; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                       <a href="<?php echo '../admin panel/data/lawyer-image/' . $fet['profile_image']; ?>"> <img src="<?php echo '../admin panel/data/lawyer-image/' . $fet['profile_image']; ?>" alt="Admin" class="rounded-circle" width="150"></a>
<?php echo $fet['qrcode']; ?>
                       <a href="<?php echo './img/' . $fet['qrcode']; ?>"> 
                       <img src="<?php echo '../admin panel/img/' . $fet['qrcode']; ?>" alt="Admin" class="rounded-circle" width="150"></a>
                        <div class="mt-3">
                          <h4><?php echo $fet['first_Name'] . " " . $fet['last_Name']; ?></h4>
                          <p class="text-secondary mb-1"><?php echo $fet['about']; ?></p>
                          <p class="text-muted font-size-sm"><?php echo $fet['contact_number'];?></p>
                          <a href="./update-lawyer-profile.php?lawyerid=<?php echo $fet['lawyerid']; ?>"><button type="submit" class="btn btn-outline-dark" >Edit </button></a>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['first_Name'] . " " . $fet['last_Name'];?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['lawyer_email']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['password']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Contact_Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['contact_number']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">CNIC</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['cnic']; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 align=center>Last Education</h5>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">University/college Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['university_college']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Degree</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['degree']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Passing Year</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['passing_year']; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 align=center>Chamber Location</h5>
                      <hr>
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
                          <h6 class="mb-0">City</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['city']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Zip Code</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['zip_code']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Practice Length</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['practice_Length']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 align=center>Case Handle</h6>
                        </div>
                        <?php
                    $pic=unserialize($fet['case_handle']);
                    foreach($pic as $p){
                        ?>
                         <div class="col-sm-9 text-secondary ">
                        <?php echo  $p . "  ,  "; ?>
                        </div>
                        <?php
                    }
                    ?>
                    
                       
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Speciality</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['casetype']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <!-- <div class="col-sm-12">
                          <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                        </div> -->
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