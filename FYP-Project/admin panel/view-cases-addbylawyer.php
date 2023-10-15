<?php 
include ('./include/connection.php');
session_start();
if( empty($_SESSION['lawyer_email']) && empty($_SESSION['uemail'])){
    header("location:./login.php");
}
 $mylawyer=$_SESSION['lawyerid'];
// $sql="SELECT * FROM `appointment-rec` WHERE `clawyer`='$lawyer'";
// $run=mysqli_query($conn,$sql);
// $lfet=mysqli_lfetch_assoc($run);
// $clientn=$lfet['']
include ('./include/header.php');
include ('./include/sidebar.php');
?>
<style>
img{
    border-radius: 50%;
    border : 1px solid black;
}
    </style>
<body>
    <!--wrapper-->
    <div class="wrapper">


        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">

            <!--end breadcrumb-->

           
            <div class="card">
                <div class="card-body">
                     <div class="row">
                        <div class="col-6">
                        <h3>List of Cases that added</h3>
                        </div>
                        <div class="col-6">
                        <a class="btn btn-sm " href="./add-new-cases-bylawyer.php" style="margin-left: 62%;        background-color: #000;color: #ddd;"><i
                        class="fa fa-user-plus"></i>Add New</a>
                        </div>
                  
                     </div>
                    <div class="table-responsive">
                    
                        <table id="example2" class="table table-striped table-bordered border-3">
                        <thead>
            <tr align="center">
                                        <th >Client Name</th>
                                        <th >Court Name</th>
                                        <th>Case-Status</th>
                                        <th >Last Date</th>
                                        <th >Next Date</th>
                                        <th>Action</th>
            </tr>
        </thead>
       
                        <tbody>
                        <?php
                        // else {
                        //     echo "Query failed: " . mysqli_error($connection);}

       $sql="SELECT * FROM `add-case-bylawyers` ac INNER JOIN `users-rec` cr ON  ac.client_name=cr.userid INNER JOIN `lawyers-rec` l ON ac.l_name=l.lawyerid INNER JOIN `province-rec` pr ON ac.pro=pr.pid INNER JOIN `district-rec` dr ON ac.dis=dr.did INNER JOIN `tehsil-rec` tr ON ac.teh=tr.tid INNER JOIN `court-rec` cor ON ac.court=cor.courtid INNER JOIN `case-type` ct ON ac.caset=ct.caseid INNER JOIN `case-category` cc ON ac.ccat=cc.cctgid INNER JOIN `case-subcategory` cs ON ac.csub=cs.csubid  WHERE `l_name`='$mylawyer'";
        $run=mysqli_query($conn,$sql);
        while($lfet=mysqli_fetch_assoc($run)){
        ?>
                          
       
       <tr>
                                        
                                        <td><a href="<?php echo "./data/user-img/" . $lfet['image']; ?>"><img width=50px height=50px src="<?php echo "./data/user-img/" . $lfet['image']; ?> " /></a>
                                            <?php echo $lfet['first_name'] . " " . $lfet['last_name'];?></td>
                                        <td><?php echo $lfet['court'] ;?></td>
                                        <td><?php echo $lfet['case_condition'] ;?></td>
                                        <td><?php echo $lfet['ldate'] ;?></td>
                                        <td><?php echo $lfet['ndate'] ;?></td>
                                       <td class="text-right">
                        
                        
                         <?php if($lfet['case_condition']=="Processing"){ ?>
                            <a class="btn btn-sm btn-success" title="Wining" href="./update-wincase-lawyers.php?case_id=<?php echo $lfet['case_id']; ?>"><i class="fa-solid fa-crown"></i></a>
                            <a class="btn btn-sm btn-danger" title="Losing" href="./update-losecase-lawyers.php?case_id=<?php echo $lfet['case_id']; ?>"><i class="fa-regular fa-thumbs-down"></i></a>
                            <?php } 
                            if($lfet['case_condition']=="Losing"){
                            ?>
                            <a class="btn btn-sm btn-success" title="Wining" href="./update-wincase-lawyers.php?case_id=<?php echo $lfet['case_id']; ?>"><i class="fa-solid fa-crown"></i></a>
                         <a class="btn btn-sm btn-info" title="Processing" href="./update-processcase-lawyers.php?case_id=<?php echo $lfet['case_id']; ?>"><i class="fa-solid fa-bars-progress"></i></a>
                         <?php } 
                         if($lfet['case_condition']=="Wining"){
                         ?>
                            <a class="btn btn-sm btn-danger" title="Losing" href="./update-losecase-lawyers.php?case_id=<?php echo $lfet['case_id']; ?>"><i class="fa-regular fa-thumbs-down"></i></a>
                            <a class="btn btn-sm btn-info" title="Processing" href="./update-processcase-lawyers.php?case_id=<?php echo $lfet['case_id']; ?>"><i class="fa-solid fa-bars-progress"></i></a>

                         <?php } ?>
                         <a class="btn btn-sm btn-secondary" title="View" href="./view-case-lawyer.php?case_id=<?php echo $lfet['case_id']; ?>"><i class="fa-solid fa-eye"></i></a>
                         <a class="btn btn-sm btn-danger" title="Delete" href="./delete-cases-addbylawyers.php?case_id=<?php echo $lfet['case_id']; ?>"><i class="fa-solid fa-trash"></i></a>

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
<?php include ('./include/footer.php');  ?>