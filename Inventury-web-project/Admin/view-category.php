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
                    <h4>View category</h4>
                    <button class="btn btn-primary" onclick="location.href='./add-category.php'">Add Category</button>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>S.no</th>
                            <th>category name</th>
                            <th>category detail</th>
                            <th>category date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                          </tr>
                        </thead>
                        <?php 
                          $sql="SELECT * FROM `category-rec`";
                          $run=mysqli_query($conn,$sql);
                          while ($fet=mysqli_fetch_assoc($run)){
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $fet['ctgid'] ;?></td>
                            <td><?php echo $fet['ctgname'] ;?></td>
                            <td><?php echo $fet['descrip'] ;?></td>
                            <td><?php echo $fet['date'] ;?></td>
                            <td><a  href="./update-category.php?ctgid=<?php echo $fet['ctgid'] ;?>"><i class="fa-solid fa-file-pen"></i></a></td>
                            <td><a  href="./delete-category.php?ctgid=<?php echo $fet['ctgid'] ;?>"><i class="fa-solid fa-trash"></i></a></td>
                            
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