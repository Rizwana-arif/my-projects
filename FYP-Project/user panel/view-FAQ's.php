<?php
include ('./include/connection.php');

include ('./include/header.php');
?>
     <style>
     .faqs{
        margin-left : 10%; 
     }
     </style>
          <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-8">
                            <div class="section-header">
                                <h2>Have A Questions?</h2>
                            </div>
                            <?php 
                                    $c=1;
                                $fsql="SELECT * FROM `FAQs-rec`";
                                $frun=mysqli_query($conn,$fsql);
                                while($ffet=mysqli_fetch_assoc($frun)){
                                    if($c<=5){
                            ?>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="<?php echo "#data".$c ?>" aria-expanded="true">
                                            <span><?php echo $c ; ?></span> <?php echo $ffet['que']; ?>
                                        </a>
                                    </div>
                                    <div id="<?php echo "data".$c ?>" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php echo $ffet['ans']; ?>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                            <?php 
                            $c++;
                        } 
                    }?>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->

