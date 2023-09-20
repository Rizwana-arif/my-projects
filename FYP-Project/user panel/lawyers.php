<?php
include ('./include/connection.php');
session_start();
// if(empty($_SESSION['email']) && empty($_SESSION['cemail'])){
//     header("location:./login.php");
// } 
include ('./include/header.php');
?>
      <style>
   .team .team-text .btnnn {
    color: #ffffff;
    border: 2px solid #aa9166;
    border-radius: 0;
    padding: 5px 30px 5px 30px;

}

.team .team-text .btnnn:hover {
    color: #ffffff;
    background: #aa9166;
}
.team .team-text p {
    margin-bottom: 7px;
    color: #999999;
}
/* CSS for the search bar */
.search {
    background-color: #f7f7f7; /* Background color of the search bar */
    padding: 20px 0; /* Padding at the top and bottom of the search bar */
}

.container {
    text-align: center; /* Center-align the content within the container */
}

.section-header {
    margin-bottom: 20px; /* Add some spacing below the header */
}

/* Style the select dropdown */
#category {
    width: 100%; /* Set the width of the dropdown */
    padding: 10px; /* Add padding to the dropdown */
    border: 1px solid #ccc; /* Add a border to the dropdown */
    border-radius: 5px; /* Add rounded corners */
    background-color: #fff; /* Background color of the dropdown */
}

/* Style the search input */
.form-group input[type="text"] {
    width: 50%; /* Set the width of the input field */
    padding: 8px; /* Add padding to the input field */
    border: 1px solid #ccc; /* Add a border to the input field */
    border-radius: 5px; /* Add rounded corners */
    background-color: #fff; /* Background color of the input field */
}

/* Style the search input when it's focused */
.form-group input[type="text"]:focus {
    border-color: #007bff; /* Change the border color on focus */
    box-shadow: 0 0 5px #007bff; /* Add a shadow on focus */
    outline: none; /* Remove the default outline */
}

   </style>         
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Attorneys</h2>
                        </div>
                        <div class="col-12">
                            
                            <a href="">Attorneys</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>About Attorneys</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
     <!-- Filter lawyer according to case category-->
     <div class="search">
                
            
                <div class="container">
                    <div class="section-header">
                        <h2>Search Lawyer</h2>
                    </div>
                    <div class="form w-100">
                    <div class="d-flex ">
                    <div class="form-group w-50 ml-5">
                    
									<select id="category" name="category" class="form-control">
                                    <option unselected >Choose...</option>
                                        <?php 
                                        $sql="SELECT * FROM `case-type`";
                                        $run=mysqli_query($conn,$sql);
                                        while($fet=mysqli_fetch_assoc($run)){
                                        ?>
										
										<option value="<?php echo $fet['caseid']; ?>"  ><?php echo $fet['casetype']; ?></option>
                                        <?php } ?>
					</select>
                    
                    </div>
                 <div class="form-group w-50">
                    <input type="text" placeholder="search......." readonly />
                    </div>
                </div>
                        
                    </div>
                </div>
           
            </div>
          <!-- end search -->

            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2>Meet Our Expert Attorneys</h2>
                    </div>
                    <div class="row" id="law">
   
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Newsletter Start -->
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Subscribe Our Newsletter</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function(){
    filterbycategory();
    function filterbycategory(casecategory="null"){
        $.ajax({
            url: "filter-lawyer.php",
            type: "POST",
            data: {category : casecategory},
            success: function(res){
           
            $("#law").html(res);
            },
            error: function(xhr, status , error){
                console.error ("AJAX Error:" , error);
            }

            
        })
    }

    $("#category").on("change", function(){
                var d=$("#category").val();
              
                filterbycategory(d);
            })
})
    </script>
 <?php include ('./include/footer.php'); ?>


       
