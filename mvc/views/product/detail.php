<div id="path" class="container">
		<div id="path-title">Home / Desktop / DELL</div> 
	</div>

	<div id="content" class="container">
		<div class="row">
			<div class="col-xs-9">
				<div class="row">
						<div class="col-xs-5">
							<div class="content-product-image">
								<img src="assets/images/2.jpg" width="100%" height="300px;">
							</div>
							<div class="content-product-thum">
								<a href=""  style="color: #c9c9c9; font-size: 20px;"><span class="glyphicon glyphicon-chevron-left"></span></a>
								
								<img src="assets/images/1.jpg" class="img">
								<img src="assets/images/2.jpg" class="img">
								<img src="assets/images/1.jpg" class="img">
								
								<a href="" style="color: #c9c9c9; font-size: 20px;"><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						</div>
						<div class="col-xs-7">
							<div id="content-product-infor">
								<h4 style="font-weight: bold;"><?php echo $data['ProductName'];?></h4>
								<div class="row" id="content-product-rate">
									<div>
										<div class="col-xs-7">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span> 1 Review
										</div>
										<div class="col-xs-5">
											<div class="row">
												<div class="col-xs-6" style="text-align: right; color: #696969;">
													<s>$10000</s>
												</div>
												<div class="col-xs-6" style="font-weight: bold; text-align: right; color: #709b1d;">
													$<?php echo $data['UnitPrice'];?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="content-product-infor1">
								<div>Menufacturer: DELL</div>
								<div>Availability: In stock 20 item(s)</div>
								<div>Product Code: <?php echo $data['modem'];?></div>
							</div>
							<div id="content-product-attribute">
								<h5 style="font-weight: bold;">Product Dimensions and Weight</h5>								
								<div>Product Lenght: 10.000m</div>
								<div>Product Weight: 10.000kg</div>
							</div>
							<div id="content-product-desc">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</div>
							<div class="item-product1">
								<div class="item-product-func12">
									<div class="row">
										<div class="col-xs-6 btn-add-cart" style="text-align: center;">
											<button type="button" class="btn btn-default btn-sm form-control item-product-func-cart" style="background-color: #709b1d;color: #fff;">
										       	<span class="glyphicon glyphicon-shopping-cart"></span> 
										       	<span class="add-cart">Add to Cart</span>
									        </button>
										</div>
										<div class="col-xs-3 btn-add-wishlist"  style="text-align: center;">
											<button type="button" class="btn btn-default btn-sm form-control item-product-func-wishlist">
										       	<span class="glyphicon glyphicon-edit"></span>
										       	<span class="add-wishlist">Add Wishlist</span>
										    </button>
										</div>
										<div class="col-xs-3 btn-add-compare"  style="text-align: center;">
											<button type="button" class="btn btn-default btn-sm form-control item-product-func-compare">
										       	<span class="glyphicon glyphicon-random"></span>
										       	<span class="add-compare">Add Compare</span>
										    </button>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
						    <li><a data-toggle="tab" href="#menu1">Description</a></li>
						    <li><a data-toggle="tab" href="#menu2">Specification</a></li>
						    <li><a data-toggle="tab" href="#menu3">Reviews</a></li>
						</ul>

						<div class="tab-content">
						    <div id="home" class="tab-pane fade in active">
						      <h3>Description</h3>
						      <p><?php echo $data['Description'];?></p>
						    </div>
						    <div id="menu1" class="tab-pane fade">
						      <h3>Specification</h3>
						      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						    </div>
						    <div id="menu2" class="tab-pane fade">
						      <h3>Reviews</h3>
						      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
						    </div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-3">
				<div class="row">
					<div id="content-right" class="col-xs-12">
						<div class="content-right-title">CATEGORY</div>
						<div class="footer-link-content">
							<ul>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">Smart phone</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">Desktop</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">Labtop</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">Accessories</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">Software</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">Networking</a></li>
							</ul>
						</div>
						<div class="content-right-title">BY BRAND</div>
						<div class="footer-link-content">
							<ul>
								<li><input type="checkbox" name="brand[]"> HP</li>
								<li><input type="checkbox" name="brand[]"> DELL</li>
								<li><input type="checkbox" name="brand[]"> APPLE</li>
								<li><input type="checkbox" name="brand[]"> ASUS</li>
								<li><input type="checkbox" name="brand[]"> SAMSUNG</li>
								<li><input type="checkbox" name="brand[]"> TOSHIBA</li>
							</ul>
						</div>
						<div class="content-right-title">BY PRICE</div>
						<div class="footer-link-content">
							<ul>
								<li><span class="glyphicon glyphicon-play"></span><a href="#"> $1000 - $2000</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#"> $2000 - $3000</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#"> $3000 - $4000</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#"> $4000 - $5000</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#"> $5000 - $6000</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#"> $6000 - $7000</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--end #content-->

	<div id="site-info" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div class="site-info-block">
						<span class="glyphicon glyphicon-send" style="font-size: 23px;"></span>&nbsp;&nbsp;
						First Shipping
					</div>
				</div>
				
				<div class="col-xs-3">
					<div class="site-info-block">
						<span class="glyphicon glyphicon-lock" style="font-size: 23px;"></span>&nbsp;&nbsp;
						Secure Store

					</div>
				</div>

				<div class="col-xs-3">
					<div class="site-info-block">
						<span class="glyphicon glyphicon-time" style="font-size: 23px;"></span>&nbsp;&nbsp;
						Save Time
					</div>
				</div>
				
				<div class="col-xs-3">
					<div class="site-info-block">
						<span class="glyphicon glyphicon-shopping-cart" style="font-size: 23px;"></span>&nbsp;&nbsp;
						Pay on Delivery
					</div>
				</div>
				
			</div>
		</div>
	</div><!--end #site-info-->