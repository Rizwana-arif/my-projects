<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $act=mysqli_real_escape_string($conn,$_POST['act']);
    $sql="INSERT INTO `act-rec` (`act`) VALUES ('$act')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./add-act.php");
        echo ("<script> alert ('Act Detail has been inserted') </script>");
    }
    else{
        echo ("<script> alert ('Act Detail has not been inserted') </script>");
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
<body>
<!-- Modal for Add cases -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Act Details</h5>
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
                                <input type="text" class="form-control" id="act"
                                   name="act" oninput="checkact()" >
                                   <span id="error" style="color:red;font-size:10px"></span>
                                <label for="act">Act Detail</label>
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
        <button type="submit" class="btn btn-primary" name="sub">Add Act</button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>
<script>
  function checkact(){
         var c=document.querySelector("#act").value;
         var cRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!cRegex.test(c)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#act").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#act").style.border="gray solid 2px";
      }
    }
    
</script>
 <!-- Modal end of add cases -->

<!-- start table of case -->
<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="card-header">
                            <h6>View Act Detail</h6>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Act
</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.No</th>
                                            <th scope="col">Act</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $ssql="SELECT * FROM `act-rec` ";
                                        $srun=mysqli_query($conn,$ssql);
                                        while($fet=mysqli_fetch_assoc($srun)){
                                    ?>
                                        <tr>
                                            <th><?php echo $fet['actid']; ?></th>
                                            <td><?php echo $fet['act']; ?></td>
                                            <td>
                                        <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>

                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="./update-act.php?actid=<?php echo $fet['actid']; ?>">Edit</a></li>
                                            <li><a class="dropdown-item" href="./delete-act.php?actid=<?php echo $fet['actid']; ?>">Delete</a></li>
                                            
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
                    <!-- end table of case -->
</body>
</html>
<?php 
include ('./include/footer.php');
?>