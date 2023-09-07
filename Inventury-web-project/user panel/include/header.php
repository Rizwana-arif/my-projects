<?php
include ('../Admin/include/connection.php');
?>


		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="false"></i>CATEGORIES</h3>
								<ul class="main-category">
									<?php
									$sql="SELECT * FROM `category-rec`";
									$run=mysqli_query($conn,$sql);
									while($fet=mysqli_fetch_assoc($run)){
									?>
									<li><a href="./category.php?ctgid=<?php echo $fet['ctgid']; ?>">
									<?php echo $fet['ctgname']; ?><i class="fa fa-angle-right" aria-hidden="false"></i></a>
										<ul class="sub-category">
											<?php 
											$myid=$fet['ctgid'];
											$ssqli="SELECT * FROM `sub-category-rec` Where `catname`='$myid'";
											$srun=mysqli_query($conn,$ssqli);
											while($sfet=mysqli_fetch_assoc($srun)){
											?>
											<li><a href="./subcategory.php?subid=<?php echo $sfet['subid']; ?>"><?php echo $sfet['subname']; ?></a></li>
											<?php } ?>
										</ul>
									</li>
<?php } ?>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="./index.php">Home</a></li>
													<li><a href="./shop-grid.php">Product</a></li>												
													<li><a href="#">Service</a></li>
													
													
													
													<li><a href="contact.html">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->