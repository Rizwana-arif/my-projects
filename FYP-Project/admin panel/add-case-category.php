<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $caset=mysqli_real_escape_string($conn,$_POST['caset']);
    $casectg=mysqli_real_escape_string($conn,$_POST['casectg']);
    $sql="INSERT INTO `case-category` (`caset`,`casectg`) VALUES ('$caset','$casectg')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./add-case-category.php");
        echo ("<script> alert ('Case Category has been inserted') </script>");
    }
    else{
        echo ("<script> alert ('Case Category has not been inserted') </script>");
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
    <title>Add Cases Type</title>
 
</head>
<body>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Case Type</h5>
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
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="caset">
                                    <option selected>Open this select menu</option>
                                    <?php 
                  $tsql="SELECT * FROM `case-type`";
                  $trun=mysqli_query($conn,$tsql);
                  while($tfet=mysqli_fetch_assoc($trun)){
                    ?>
                 <option value="<?php echo $tfet['caseid'] ?>"><?php echo $tfet['casetype']; ?></option>
                    <?php
                  }
              ?>
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                   name="casectg" >
                                <label for="floatingPassword">Case Category</label>
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
        <button type="submit" class="btn btn-primary" name="sub">Add Case</button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>

<!-- End Modal -->
<!-- start table of case categories -->
<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="card-header">
                            <h6>View Cases Type</h6>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Cases Type
</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.No</th>
                                            <th scope="col">Case Type</th>
                                            <th>Case Category</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $ssql="SELECT * FROM `case-category` cc INNER JOIN `case-type` ct ON cc.caset=ct.caseid ";
                                        $srun=mysqli_query($conn,$ssql);
                                        while($fet=mysqli_fetch_assoc($srun)){
                                    ?>
                                        <tr>
                                            <th><?php echo $fet['cctgid']; ?></th>
                                            <td><?php echo $fet['caset']; ?></td>
                                            <td><?php echo $fet['casectg']; ?></td>
                                            <td>
                                        <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- <i class="fa-duotone fa-grip-dots fa-flip-horizontal" style="--fa-secondary-opacity: 0;"></i> -->
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="./update-case-category.php?cctgid=<?php echo $fet['cctgid']; ?>">Edit</a></li>
                                            <li><a class="dropdown-item" href="./delete-case-category.php?cctgid=<?php echo $fet['cctgid']; ?>">Delete</a></li>
                                            
                                        </ul>
                                        </div>

                                        </td>
                                        </tr>
                                       <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end table of case categories -->
</body>
</html>
<?php 
include ('./include/footer.php');
?>