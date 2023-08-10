<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $que=mysqli_real_escape_string($conn,$_POST['que']);
    $ans=mysqli_real_escape_string($conn,$_POST['ans']);
    $date=date("d/m/y");
    $sql="INSERT INTO `FAQs-rec` (`que`,`ans`,`date`) VALUES ('$que','$ans','$date')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./FAQs.php");
        echo ("<script> alert ('Successfully ! Add a question with answer.') </script>");
    }
    else{
                echo ("<script> alert ('Failed ! not added.') </script>");
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
    <title>Add Role</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
<body>
<!-- Modal for Add cases -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add FAQs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body">
      
                        <div class="bg-light rounded h-100 p-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="que"
                                   name="que" oninput="checkque()" >
                                   <span id="error" style="color:red;font-size:10px"></span>
                                <label for="que">Question</label>
                            </div>
                            <div class="form-floating mb-3">
                            <textarea class="form-control" aria-label="With textarea" name="ans" id="ans" oninput="checkans()"></textarea>
                            <span id="aerror" style="color:red;font-size:10px"></span>
                            <label for="ans">Answer of the question</label>
                        </div>
                        </div>
                        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="sub">Add FAQs</button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>
<script>
  function checkque(){
         var que=document.querySelector("#que").value;
         var queRegex =/^[A-Za-z0-9\s?!.,:;'"\-()]+$/;
         if (!queRegex.test(que)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#que").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#que").style.border="gray solid 2px";
      }
    }
    function checkans(){
         var ans=document.querySelector("#ans").value;
         var ansRegex =/^[\x20-\x7E]*$/;
         if (!ansRegex.test(ans)) {
           document.querySelector("#aerror").innerHTML="Invalid Format";
           document.querySelector("#ans").style.border="red solid 1px";
        
      }else{
        document.querySelector("#aerror").innerHTML="";
        document.querySelector("#ans").style.border="gray solid 2px";
      }
    }
</script>
 <!-- Modal end of add cases -->

<!-- start table of case -->
<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="card-header">
                            <h6>View FAQs Detail</h6>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add FAQs
</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.No</th>
                                            <th scope="col">Question</th>
                                            <th scope="col">Answer</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $ssql="SELECT * FROM `FAQs-rec` ";
                                        $srun=mysqli_query($conn,$ssql);
                                        while($fet=mysqli_fetch_assoc($srun)){
                                    ?>
                                        <tr>
                                            <th><?php echo $fet['FAQid']; ?></th>
                                            <td><?php echo $fet['que']; ?></td>
                                            <td><?php echo $fet['ans']; ?></td>
                                            <td><?php echo $fet['date']; ?></td>
                                            <td>
                                        <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>

                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="./update-FAQs.php?FAQid=<?php echo $fet['FAQid']; ?>">Edit</a></li>
                                            <li><a class="dropdown-item" href="./delete-FAQs.php?FAQid=<?php echo $fet['FAQid']; ?>">Delete</a></li>
                                            
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