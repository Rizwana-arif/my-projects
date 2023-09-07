<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $proname=mysqli_real_escape_string($conn,$_POST['proname']);
    $disname=mysqli_real_escape_string($conn,$_POST['disname']);
    $tehsil=mysqli_real_escape_string($conn,$_POST['tehsil']);
    $sql="INSERT INTO `tehsil-rec` (`proname`,`disname`,`tehsil`) VALUES ('$proname','$disname','$tehsil')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./tehsil.php");
        echo ("<script> alert ('Tehsil Detail has been inserted') </script>");
    }
    else{
        echo ("<script> alert ('Tehsil Details has not been inserted') </script>");
    }
}
include ('./include/header.php');
include ('./include/sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tehsil</title>
    <style>
.card{
    width: 70%;
    margin-left: 150px;
    margin-top:30px;
   
}
    </style>
</head>
<body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tehsil Detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
      
                        <div class="bg-light rounded h-100 p-4">
                            <!-- <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div> -->
                            <div class="form-floating mb-3">
                                <select class="form-select" id="proname"
                                    aria-label="Floating label select example" name="proname">
                                    <option selected>Open this select menu</option>
                                    <?php 
                  $tsql="SELECT * FROM `province-rec`";
                  $trun=mysqli_query($conn,$tsql);
                  while($tfet=mysqli_fetch_assoc($trun)){
                    ?>
                 <option value="<?php echo $tfet['pid'] ?>"><?php echo $tfet['province']; ?></option>
                    <?php
                  }
              ?>
                                </select>
                                <label for="ctype">Province</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="disname"
                                    aria-label="Floating label select example" name="disname">
                                    <option selected>Open this select menu</option>
                                    <?php 
                  $csql="SELECT * FROM `district-rec`";
                  $crun=mysqli_query($conn,$csql);
                  while($cfet=mysqli_fetch_assoc($crun)){
                    ?>
                 <option value="<?php echo $cfet['did'] ?>"><?php echo $cfet['district']; ?></option>
                    <?php
                  }
              ?>
                                </select>
                                <label for="cctg">District</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                   name="tehsil" >
                                <label for="floatingPassword">Tehsil</label>
                            </div>
                            <!-- <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                            </div> -->
                           
                        </div>
                        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-dark" name="sub">Add Tehsil </button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>



<div class="wrapper">


<!--end header -->
<!--start page wrapper -->
<div class="page-wrapper">

    <!--end breadcrumb-->

   
    <div class="card">
        <div class="card-body">
             <div class="row">
                <div class="col-6">
                <h3>Record of Tehsil</h3>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="margin-left: 30%;background-color: #000;color: #ddd;"><i
                class="fa fa-user-plus"></i>
                Add Tehsil
                </button>
                </div>
          
             </div>
            <div class="table-responsive">
            
                <table id="example2" class="table table-striped table-bordered border-3 ">
                <thead>
    <tr>
        <th>Sr No.</th>
        <th>Province</th>
        <th>District</th>
        <th>Tehsil</th>
        <th>Action</th>
    </tr>
</thead>

                <tbody>
                <?php
$ssql="SELECT * FROM `tehsil-rec` t INNER JOIN `province-rec` p ON t.proname=p.pid INNER JOIN `district-rec` d ON t.disname=d.did ";
$run=mysqli_query($conn,$ssql);
while($cfet=mysqli_fetch_assoc($run)){
?>
                  

<tr>
   <td><?php echo $cfet['tid'] ; ?></td>
   <td><?php echo $cfet['province'] ; ?></td>
   <td><?php echo $cfet['district'] ; ?></td>
   <td><?php echo $cfet['tehsil'] ; ?></td>
   <td class="text-right">
   <a class="btn btn-sm btn-success" href="./update-tehsil.php?tid=<?php echo $cfet['tid']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
     <a class="btn btn-sm btn-danger" href="./delete-tehsil.php?tid=<?php echo $cfet['tid']; ?>"><i class="fa-solid fa-trash"></i></a>
   </td>
  </tr>

  <?php } ?>
       </tbody>
             </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
<?php 
include ('./include/footer.php');
?>