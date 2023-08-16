<?php 


include ("./include/header.php");
include ("./include/sidebar.php");
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
                    <button class="btn btn-primary" onclick="location.href='./add-product.php'">Add Product</button>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Category Name</th>
                            <th>SubCategory Name</th>
                            <th>Supplier Name</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Description </th>
                            <th>Unit Price</th>
                            <th>Sale Price</th>
                            <th>Quantity</th>
                            <th>Stock</th>
                            <th>Picture</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                          </tr>
                        </thead>
                        <tbody id="view">
                    
                          
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(document).ready(function(){
       function load(){
                       $.ajax({
                       url:"./ajax/product-view.php",
                       method:"GET",
                       success:function(res){
                         $("#view").html(res);
                       }
                       });
                  }

                  load();
  });
</script>

 <?php 
                          
include ("./include/footer.php");
 ?>