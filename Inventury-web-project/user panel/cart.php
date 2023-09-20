<?php 
include ('../Admin/include/connection.php');
session_start();
if(empty($_SESSION['email'])){
  header("location:../Admin/login.php");
}
@$email=$_SESSION['email'];
include ('./include/top-header.php');
include ('./include/header2.php');
?>
		
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>Product</th>
								<th>Product Name</th>
								<th class="text-center">Product_code</th>
								<th class="text-center">Product_Price</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">Total Price</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$sql="SELECT * FROM `cart-rec` c INNER JOIN `product-rec` p ON c.p_id=p.pid WHERE `email`='$email'";
								$run=mysqli_query($conn,$sql);
								$gtotal=0;
								$abc=0;
								while($fet=mysqli_fetch_assoc($run)){
									$pic=unserialize($fet['pfile']);
									
									
							?>
							<tr>
								<td class="image" data-title="No">
									<img class="default-img" style="height : 90px;" src="<?php echo '../Admin/product-imgs/' . $pic[0]; ?>" alt="#">
								</td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#"><?php echo $fet['pname']; ?></a></p>
									<p class="product-des"><?php echo $fet['pdescrip']; ?></p>
								</td>
								<td class="price" data-title="Price"><span><?php echo $fet['pcode']; ?></span></td>
								<td class="price" data-title="Price"><span><?php echo $fet['sprice']; ?></span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" data-type="minus" data-field="quant[<?php echo $abc; ?>]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="hidden" id="cart_id" value="<?php echo $fet['cart_id']; ?>">
										<input type="hidden" id="p_price" value="<?php echo $fet['p_price']; ?>">
										<input type="text" name="quant[<?php echo $abc; ?>]" id="qty" class="input-number"  data-min="1" data-max="100" value="<?php echo $fet['qty']; ?>">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[<?php echo $abc; ?>]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span><?php echo $fet['total_price']; ?></span></td>
								<td class="action" data-title="Remove"><a herf="#" ><i  data-del="<?php echo $fet['cart_id']; ?>" class="ti-trash remove-icon remo"></i></a></td>
							</tr>
							<?php 
							
							$gtotal=$gtotal+$fet['total_price'];
							$abc++;
								}
								
								
						?>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<div class="button5">
								<a   class="btn w-100 mb-2 removeall">Remove All<i   class="ti-trash remove-icon ml-2"></i></a>
								</div>
									<ul>
										<li>Cart Subtotal<span><?php echo $gtotal."PKR"; ?></span></li>
										<li>Shipping<span>Free</span></li>
										<li>You Save<span>0 PKR</span></li>
										<li class="last">You Pay<span><?php echo $gtotal."PKR"; ?></span></li>
									</ul>
									<div class="button5">
										<a href="./checkout.php" class="btn">Checkout</a>
										<a href="#" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	
	
	<!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> -->
                                <!-- Product Slider -->
									<!-- <div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="images/modal1.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal2.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal3.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal4.jpg" alt="#">
											</div>
										</div>
									</div> -->
								<!-- End Product slider -->
                            <!-- </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity"> -->
										<!-- Input Order -->
										<!-- <div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div> -->
										<!--/ End Input Order -->
									<!-- </div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal end -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
 $(document).ready(function () {
	$(document).on("click",".remo",function () {
                    var myid = $(this).data("del");
                    var msg = this;
					
					$.ajax({
                                   url: "./cart-ajax.php",
                                   method: "POST",
                                   data: { delete: myid },
                                   success: function (res) {
									    if (res == 1) {
                                       alert   ('data has been delete');
                                        $(msg).closest("tr").fadeOut();
										load_cart_items();
                                        }
										else{
											alert   ('data has not been delete');
										}
                                   }
                              });
	});

	$(document).on("click",".removeall",function () {					
					$.ajax({
                                   url: "./cart-ajax.php",
                                   method: "POST",
                                   data: { action: "delete" },
                                   success: function (res) {
									
									    if (res == 1) {
                                       alert   ('data has been delete');
                                        $(msg).closest("tr").fadeOut();
										load_cart_items();
                                        }
										else{
											alert   ('data has not been delete');
										}
                                   }
                              });
	});
	$(document).on("change",".input-number",function () {
		var data=$(this).closest("tr");
		var cart_id=data.find("#cart_id").val();
		var p_price=data.find("#p_price").val();
		var qty=data.find("#qty").val();
			$.ajax({
				url: "./cart-ajax.php",
				method: "POST",
				data: { cart_id: cart_id,
						p_price: p_price,
						qty: qty
				},
				success: function (res) {
				
					if (res == 1) {
					window.location.reload();
					}
					else{
						alert   ('Quantity has not been increased');
					}
				}
			});
	})
 })
		</script>
	<?php include('./include/footer.php'); ?>