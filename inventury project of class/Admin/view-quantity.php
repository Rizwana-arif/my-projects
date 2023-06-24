<?php 
include ("./include/header.php");
include ("./include/sidebar.php");
include ("./include/connection.php");

?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
.btn{
  margin-left: auto;
}
i{
  color : black;
  font-size : 25px;
}
i:hover{
  color : red;
  cursor : pointer;
  }
.fa-file-pen:hover{
  color : blue;
  cursor : pointer;
}
  </style>

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>View Quantity</h4>
                    <button class="btn btn-primary" onclick="location.href='./add-quantity.php'">Add quantity</button>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>S.no</th>
                            <th>Quantity name</th>
                            <th>quantity detail</th>
                            <th>quantity date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                          </tr>
                        </thead>
                        <?php 
                          $sql="SELECT * FROM `quantity-rec`";
                          $run=mysqli_query($conn,$sql);
                          while ($fet=mysqli_fetch_assoc($run)){
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $fet['quaid'] ;?></td>
                            <td><?php echo $fet['quaname'] ;?></td>
                            <td><?php echo $fet['quadescrip'] ;?></td>
                            <td><?php echo $fet['quadate'] ;?></td>
                            <td><a  href="./update-quantity.php?quaid=<?php echo $fet['quaid'] ;?>"><i class="fa-solid fa-file-pen"></i></a></td>
                            <td><a  href="./delete-quantity.php?quaid=<?php echo $fet['quaid'] ;?>"><i class="fa-solid fa-trash"></i></a></td>
                            
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
        </section>
</div>


 <?php 
                          
include ("./include/footer.php");
 ?>