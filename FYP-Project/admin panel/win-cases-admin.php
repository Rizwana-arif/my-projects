<?php 
include ('./include/connection.php');
session_start();
if(empty($_SESSION['email'])){
    header("location:./login.php");
}
include ('./include/header.php');
include ('./include/sidebar.php');
?>
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
                        <h3>List of Win Cases</h3>
                        </div>
                     </div>
                    <div class="table-responsive">
                    
                        <table id="example2" class="table table-striped table-bordered border-3">
                        <thead>
            <tr>
                                        <th >Lawyer Name</th>
                                        <th >Client Name</th>
                                        <th >Court Name</th>
                                        <th>Status</th>
                                        <th >Last Date</th>
                                        <th >Next Date</th>
                                        <th>Action</th>
            </tr>
        </thead>
       
                        <tbody>
                        <?php
                        // else {
                        //     echo "Query failed: " . mysqli_error($connection);}
                        $s=$_GET['info'];
                        $sql="SELECT * FROM `add-case-bylawyers` ac INNER JOIN `users-rec` cr ON  ac.client_name=cr.userid INNER JOIN `lawyers-rec` l ON ac.l_name=l.lawyerid INNER JOIN `province-rec` pr ON ac.pro=pr.pid INNER JOIN `district-rec` dr ON ac.dis=dr.did INNER JOIN `tehsil-rec` tr ON ac.teh=tr.tid INNER JOIN `court-rec` cor ON ac.court=cor.courtid INNER JOIN `case-type` ct ON ac.caset=ct.caseid INNER JOIN `case-category` cc ON ac.ccat=cc.cctgid INNER JOIN `case-subcategory` cs ON ac.csub=cs.csubid";
                        $run=mysqli_query($conn,$sql);
                        while($fet=mysqli_fetch_assoc($run)){
                        if($fet['case_condition']==$s){
       
        ?>
                          
       
       <tr>
                                        <td><?php echo $fet['first_Name'];?></td>
                                        <td><?php echo $fet['first_name'] . " " . $fet['last_name'];?></td>
                                        <td><?php echo $fet['court'] ;?></td>
                                        <td><?php echo $fet['case_condition'] ;?></td>
                                        <td><?php echo $fet['ldate'] ;?></td>
                                        <td><?php echo $fet['ndate'] ;?></td>
                                       <td class="text-right">
                         <a class="btn btn-sm btn-secondary" title="View" href="./view-case-lawyer.php?case_id=<?php echo $fet['case_id']; ?>"><i class="fa-solid fa-eye"></i></a>
                         <a class="btn btn-sm btn-danger" title="Delete" href="./delete-cases-addbylawyers.php?case_id=<?php echo $fet['case_id']; ?>"><i class="fa-solid fa-trash"></i></a>
           </td>
          </tr>
      
                     <?php
                         }
                        
                    } 
          ?>
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