<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Frozen</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="public/style.css" />

	

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="public/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="public/css/style.css" />
    <style>
      .card{
        border-radius:0%;
        /* border-bottom-right-radius: 25px; */
        border-top-left-radius: 25px;
        border: 1px solid #2e856e31;
      }
      .card-img-top{
        border-radius:0%;
        border-top-left-radius: 25px;
      }
    </style>
</head>
    
<body>

    
    <!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list" style="float:right;">
						<li style="font-size:20px; font-weight:normal; text-transform:capitalize;"><a href="<?= base_url('frozen');?>" >Ice Cream Home</a></li>
						<li style="font-size:20px; font-weight:normal;"><a href="<?= base_url('frozen/customize');?>">Custermize</a></li>
                        <li style="font-size:20px; font-weight:normal;"><a href="#">About Us</a></li>
                        <li style="font-size:20px; font-weight:normal;"><a href="#">User</a></li>
                        
						
						
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->
    

    <!-- BREADCRUMB -->
	<div id="breadcrumb" style="">
		
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
                
                
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<!--<div id="product-main-view">-->
							<div class="product-view">
								<img src="public/img/ice1.png" alt="">
							</div>
							
						<!--</div>-->
						
					</div>
					<div class="col-md-6">
						<div class="product-body">
							 <!-- <div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>  -->
							

		<div class="menu">
		
			<h2> Ice Cream Base</h2>
			
			<ul class="columns" data-columns="3">
				<li class="Sweet_Cream">
					<label>
						<input type="checkbox" name="s1">
						<span class="icon"></span>
						<span class="list">Sweet Cream</span>
					</label>
				</li>

				<li class="Chocalate">
					<label>
						<input type="checkbox" name="s1">
						<span class="icon"></span>
						<span class="list">Chocalate</span>
					</label>
				</li>

				<li class="Vanila">
					<label>
						<input type="checkbox" name="s1">
						<span class="icon"></span>
						<span class="list">Vanila</span>
					</label>
				</li>
				<li class="Milo">
					<label>
						<input type="checkbox" name="s1">
						<span class="icon"></span>
						<span class="list">Milo</span>
					</label>
				</li>

				
			</ul>
			<p class="p-3 h4 mb-2 bg-warning text-dark" id="ss1"> </p>
			<hr/>
		</div>

		<div class="menu">
			<h2> Pick 2 Mix In</h2>
			
			<ul class="columns" data-columns="3">
				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Pineapple</span>
					</label>
				</li>	

				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Passion</span>
					</label>
				</li>

				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Mango</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Strawberry</span>
					</label>
				</li>

				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Raisins</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Oreo</span>
					</label>
				</li>

				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Blueberry</span>
					</label>
				</li>

				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Kit Kat</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Chocos</span>
					</label>
				</li>

				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Bannana</span>
					</label>
				</li>

				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Cheese</span>
					</label>
				</li>
				
				<li class="new">
					<label>
						<input type="checkbox" name="s2">
						<span class="icon"></span>
						<span class="list">Blackberry</span>
					</label>
				</li>

				
			</ul>
			<p class="p-3 h4 mb-2 bg-warning text-dark" id="ss2"> </p>
			<hr/>
		</div>

		<div class="menu">
			<h2> Pick 2 Topping</h2>
			
			<ul class="columns" data-columns="3">
				<li class="new">
					<label>
						<input type="checkbox" name="s3">
						<span class="icon"></span>
						<span class="list">Chocolate Chip</span>
					</label>
				</li>	

				<li class="new">
					<label>
						<input type="checkbox" name="s3">
						<span class="icon"></span>
						<span class="list">Marshmallow</span>
					</label>
				</li>

				<li class="new">
					<label>
						<input type="checkbox" name="s3">
						<span class="icon"></span>
						<span class="list">Choco Pops</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s3">
						<span class="icon"></span>
						<span class="list">Strawberry</span>
					</label>
				</li>

				<li class="new">
					<label>
						<input type="checkbox" name="s3">
						<span class="icon"></span>
						<span class="list">Wafer Sticks</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s3">
						<span class="icon"></span>
						<span class="list">Fruity Loops</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s3">
						<span class="icon"></span>
						<span class="list">Peanut Stick</span>
					</label>
				</li>

				<li class="new">
					<label>
						<input type="checkbox" name="s3">
						<span class="icon"></span>
						<span class="list">Cherry</span>
					</label>
				</li>

				
			</ul>
			<p class="p-3 h4 mb-2 bg-warning text-dark" id="ss3"> </p>
			<hr/>
		</div>

		<div class="menu">
			<h2> Sauce</h2>
			
			<ul class="columns" data-columns="3">
			
				<li class="new">
					<label>
						<input type="checkbox" name="s4">
						<span class="icon"></span>
						<span class="list">Chocolate</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s4">
						<span class="icon"></span>
						<span class="list">Strawberry</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s4">
						<span class="icon"></span>
						<span class="list">Caramel</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s4">
						<span class="icon"></span>
						<span class="list">Condensed Milk</span>
					</label>
				</li>
				<li class="new">
					<label>
						<input type="checkbox" name="s4">
						<span class="icon"></span>
						<span class="list">Kithul Pani</span>
					</label>
				</li>

				
			</ul>
			<p class="p-3 h4 mb-2 bg-warning text-dark" id="ss4"> </p>
			<hr/>
		</div>

							<p><strong>Availability:</strong> Not in Stock </p>
							
							<p></p>
							<div class="product-options">
								
								
							</div>
                            <form action="" method="post">

							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">QTY: </span>
									<input class="input" type="number">
								</div>
                                
								<button type="submit" name="cart" value="ProID" class="primary-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                
								
							</div>
                                
                                </form>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab1">Details</a></li>
								<li><a data-toggle="tab" href="#tab2">Reviews (3)</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<p>Description of Product</p>
								</div>
								<div id="tab2" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">
												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p> </p>
													</div>
												</div>

												<div class="single-review">
													
													
												</div>

												
												<ul class="reviews-pages">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6">
											<h4 class="text-uppercase">Write Your Review</h4>
											<p>Your email address will not be published.</p>
											<form class="review-form">
												<div class="form-group">
													<input class="input" type="text" placeholder="Your Name" />
												</div>
												<div class="form-group">
													<input class="input" type="email" placeholder="Email Address" />
												</div>
												<div class="form-group">
													<textarea class="input" placeholder="Your review"></textarea>
												</div>
												<div class="form-group">
													<div class="input-rating">
														<strong class="text-uppercase">Your Rating: </strong>
														<div class="stars">
															<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
															<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
															<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
															<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
															<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
														</div>
													</div>
												</div>
												<button class="primary-btn">Submit</button>
											</form>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					
				</div>
				<!-- section title -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
    
	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="#" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>We are dedicated to our promise of delivery the best quality products to consumers who have relied on us for a long time we committed in a creating best food product to suits local tastes as well as international standards</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Feedback</h3>
						<p>Give your feedback about our services</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
                            <div class="form-group">
								<input class="input" placeholder="Your comment">
							</div>
							<button class="primary-btn">Submit</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a href="#" target="_blank">FROZEN</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->

	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/slick.min.js"></script>
	<script src="public/js/nouislider.min.js"></script>
	<script src="public/js/jquery.zoom.min.js"></script>
	<script src="public/js/main.js"></script>
	<script src="public/js/check.js"></script>
	<script src="public/js/setimg.js"></script>
	<script src="public/js/sweetalert.min.js"></script>
   
           <!--Add to cart code -->
    

    <!--Add to cart code -->

</body>

</html>
