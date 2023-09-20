<?php 
include ('./include/connection.php');
$qr=$_POST['codeqr'];
if(!empty($qr)){
    $sql="SELECT * FROM `lawyers-rec` WHERE `reg_id`='$qr'";
							$run=mysqli_query($conn,$sql);
						$fet=mysqli_fetch_assoc($run);
                        ?>
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
                        <div class="mt-3">
                          <h4><?php echo $fet['first_Name'] . " " . $fet['last_Name']; ?></h4>
                          <p class="text-secondary mb-1"><?php echo $fet['full_address']; ?></p>
                          <p class="text-muted font-size-sm"><?php echo $fet['contact_number'];?></p>
                         
                         
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
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Speciality</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $fet['speciality']; ?>
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>
    </div>
              </div>
  <?php                          
}else{
   echo "Failed";
}
?>