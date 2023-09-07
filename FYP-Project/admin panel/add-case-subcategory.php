<?php 
include ('./include/connection.php');

session_start();
if(empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
if(isset($_POST['sub'])){
    $ctype=mysqli_real_escape_string($conn,$_POST['ctype']);
    $cctg=mysqli_real_escape_string($conn,$_POST['cctg']);
    $csubctg=mysqli_real_escape_string($conn,$_POST['csubctg']);
    $sql="INSERT INTO `case-subcategory` (`ctype`,`cctg`,`csubctg`) VALUES ('$ctype','$cctg','$csubctg')";
    $run=mysqli_query($conn,$sql);
    if($run){
        header ("location:./add-case-subcategory.php");
        echo ("<script> alert ('Case SubCategory has been inserted') </script>");
    }
    else{
        echo ("<script> alert ('Case SubCategory has not been inserted') </script>");
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
    <title>Add Cases SubCategory</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
<body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Case SubCateory</h5>
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
                                <select class="form-select" id="ctype"
                                    aria-label="Floating label select example" name="ctype">
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
                                <label for="ctype">Case Type</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="cctg"
                                    aria-label="Floating label select example" name="cctg">
                                    <option selected>Open this select menu</option>
                                    <?php 
                  $csql="SELECT * FROM `case-category`";
                  $crun=mysqli_query($conn,$csql);
                  while($cfet=mysqli_fetch_assoc($crun)){
                    ?>
                 <option value="<?php echo $cfet['cctgid'] ?>"><?php echo $cfet['casectg']; ?></option>
                    <?php
                  }
              ?>
                                </select>
                                <label for="cctg">Case Category</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="csubctg"
                                   name="csubctg" oninput="checkcase()">
                                   <span id="error" style="color:red;font-size:10px"></span>

                                <label for="csubctg">Case SubCategory</label>
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
        <button type="submit" class="btn btn-dark" name="sub">Add Case Subcategory</button>
      </div>
      </div>
    
     
    </div>
</form>
  </div>
</div>

<script>
  function checkcase(){
         var csubctg=document.querySelector("#csubctg").value;
         var csubctgRegex =/^[A-Za-z\s'-]{1,50}$/;
         if (!csubctgRegex.test(csubctg)) {
           document.querySelector("#error").innerHTML="Write Alphabets Only";
           document.querySelector("#csubctg").style.border="red solid 1px";
        
      }else{
        document.querySelector("#error").innerHTML="";
        document.querySelector("#csubctg").style.border="gray solid 2px";
      }
    }
    
</script>

<div class="wrapper">


<!--end header -->
<!--start page wrapper -->
<div class="page-wrapper">

    <!--end breadcrumb-->

   
    <div class="card">
        <div class="card-body">
             <div class="row">
                <div class="col-6">
                <h3>Record of Cases</h3>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="margin-left: 30%;background-color: #000;color: #ddd;"><i
                class="fa fa-user-plus"></i>
                Add Cases Subcategory
                </button>
                </div>
          
             </div>
            <div class="table-responsive">
            
                <table id="example2" class="table table-striped table-bordered border-3 ">
                <thead>
    <tr>
        <th>Sr No.</th>
        <th>Case Type</th>
        <th>Case Category</th>
        <th>Case SubCategory</th>
        <th>Action</th>
    </tr>
</thead>

                <tbody>
                <?php
 $ssql="SELECT * FROM `case-subcategory` cc INNER JOIN `case-type` ct ON cc.ctype=ct.caseid INNER JOIN `case-category` cct ON cc.cctg=cct.cctgid ";
$run=mysqli_query($conn,$ssql);
while($cfet=mysqli_fetch_assoc($run)){
?>
                  

<tr>
   <td><?php echo $cfet['csubid'] ; ?></td>
   <td><?php echo $cfet['casetype'] ; ?></td>
   <td><?php echo $cfet['casectg'] ; ?></td>
   <td><?php echo $cfet['csubctg'] ; ?></td>
   <td class="text-right">
   <a class="btn btn-sm btn-success" href="./update-case-subcategory.php?csubid=<?php echo $cfet['csubid']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
     <a class="btn btn-sm btn-danger" href="./delete-case-subcategory.php?csubid=<?php echo $cfet['csubid']; ?>"><i class="fa-solid fa-trash"></i></a>
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