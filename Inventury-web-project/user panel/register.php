<?php 
include ('../Admin/include/connection.php');
if(isset($_POST['sub'])){
    $first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
    $last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $contact_number=mysqli_real_escape_string($conn,$_POST['contact_number']);
    $country=mysqli_real_escape_string($conn,$_POST['country']);
    $state=mysqli_real_escape_string($conn,$_POST['state']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $postal_code=mysqli_real_escape_string($conn,$_POST['postal_code']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
    $address2=mysqli_real_escape_string($conn,$_POST['address2']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $password_confirm=mysqli_real_escape_string($conn,$_POST['password_confirm']);
    $status="user";
    $sql="INSERT INTO `users-rec` (`first_name` , `last_name` , `email` , `contact_number` , `country` , `state` , `city` , `postal_code` ,`address` , `address2` , `password` , `password_confirm`,`status`) VALUES ('$first_name' , '$last_name' , '$email' ,'$contact_number','$country','$state' ,'$city','$postal_code','$address','$address2','$password' ,'$password_confirm','$status')";
    $run=mysqli_query($conn,$sql);
    if($run){
        echo "<script> alert ('Successfully ! Registered...')</script>";
        header("location:./index.php");

    }
    else{
      echo "<script> alert ('Failed! Something wrong plz try later')</script>";
    }
}
include ('./include/top-header.php');
include ('./include/header.php');
?>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section ml-10">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">First Name</label>
                      <input id="first_name" type="text" class="form-control" name="first_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <!-- <div class="invalid-feedback"> -->
                    </div>
                    <div class="form-group col-6">
                      <label for="contact_number">Contact Number</label>
                      <input id="contact_number" type="text" class="form-control" name="contact_number">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="country">Country</label>
                      <input id="country" type="text" class="form-control" name="country" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="state">State</label>
                      <input id="state" type="text" class="form-control" name="state">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="city">City</label>
                      <input id="city" type="text" class="form-control" name="city" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="postal_code">Postal Code</label>
                      <input id="postal_code" type="text" class="form-control" name="postal_code">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="address">Address</label>
                      <input id="address" type="text" class="form-control" name="address" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="address2">Address 2</label>
                      <input id="address2" type="text" class="form-control" name="address2">
                    </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password_confirm">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="../Admin/login.php">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 
</body>


<?php 
include ('./include/footer.php');
?>