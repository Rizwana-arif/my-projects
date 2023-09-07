<?php
include ('./include/connection.php');
session_start();
if(empty($_SESSION['uemail'])  && empty($_SESSION['lawyer_email']) ){
  header("location:./login.php");
}
$pro=$_GET['case_id'];
$sql="SELECT * FROM `add-case-bylawyers` ac INNER JOIN `users-rec` cr ON  ac.client_name=cr.userid INNER JOIN `lawyers-rec` l ON ac.l_name=l.lawyerid INNER JOIN `province-rec` pr ON ac.pro=pr.pid INNER JOIN `district-rec` dr ON ac.dis=dr.did INNER JOIN `tehsil-rec` tr ON ac.teh=tr.tid INNER JOIN `court-rec` cor ON ac.court=cor.courtid INNER JOIN `case-type` ct ON ac.caset=ct.caseid INNER JOIN `case-category` cc ON ac.ccat=cc.cctgid INNER JOIN `case-subcategory` cs ON ac.csub=cs.csubid  WHERE `case_id`='$pro'";

    $run=mysqli_query($conn,$sql);
    if($run){
        $lcfet=mysqli_fetch_assoc($run);
    }
    else{
         
                            echo "Query failed: " . mysqli_error($conn);
    }
    
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
                    <h4 align=center>Added Case Details</h4>
                    <hr>
                    <h5 align=center >Status Of Case  : <?php echo $lcfet['case_condition']; ?></h6> 
                    <hr>
                        <h5 align=center>Client Information</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['first_name'] . "  ". $lcfet['last_name'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['user_Email']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Contact Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['contact_number']; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 align=center>Case Information</h5>
                        <hr>
                        <h5 >Party Information</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Petitioner Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['petitioner_name']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Petitioner Advocate Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['adv_name']?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Respondent Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['respondent_name']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Respondent Advocate Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['respondent_adv']; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 >Area</h5>
                        <hr>
                     <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Province</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['province']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">District</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['district']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Tehsil</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['tehsil']; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 >Court</h5>
                        <hr>
                     <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Court Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['court']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Judge Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['jname']; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 >Case Information</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Case Type</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['casetype'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Case Category</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['casectg'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Case SubCategory</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['csubctg'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Case No.</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['cno'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Case Date</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['cdate'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 >Registration Information</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">CNR/Reference Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['refno'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Registration Date</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['rdate'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 >FIR Detail</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Police Station</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['pstation'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">FIR No.</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['fno'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">FIR Date</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['fdate'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 >Filling Information</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">File Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['fnum'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">File Date</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['fidate'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 >Act Information</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Act Type</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['atype'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Under Section</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['us'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <h5 >Case Hearing</h5>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Purpose Of Hearing</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $lcfet['ph'] ; ?>
                        </div>
                      </div>
                      <hr>
                      <h6 align=center>Last Date :  <?php echo $lcfet['ldate'];  ?></h6>
                    <hr>
                    <h6 align=center>Next Date :  <?php echo $lcfet['ndate'];  ?></h6>
                    </div>
                  </div>
    
                 
    
    
    
                </div>
              </div>
    
            </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>