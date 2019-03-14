<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner"  style="height: 100%;">
		    <div class="item active">
		      <img src="assets/images/la.jpg" alt="Los Angeles" width="100%">
		    </div>

		    <div class="item">
		      <img src="assets/images/chicago.jpg" alt="Chicago" width="100%">
		    </div>

		    <div class="item">
		      <img src="assets/images/ny.jpg" alt="New York" width="100%">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</div><!--end slider-->

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

	<div id="feature" class="container">
		<div class="feature-title">
			<div class="row">
				<div class="col-xs-1" style="height: 29px; line-height: 29px">
					<button style="font-size:16px;color: #709b1d;">
						<i class="fa fa-caret-square-o-left"></i>
					</button>
				</div>
				<div class="col-xs-10 feature-title-center">
					<ul>
						<li class="active"><a href="#">Feature</a></li>
						<li><a href="#">New Item</a></li>
						<li><a href="#">Top Seller</a></li>
						<li><a href="#">Top Ratting</a></li>
					</ul>
				</div>
				<div class="col-xs-1" style="height: 29px; line-height: 29px; text-align: right;">
					<button style="font-size:16px;color: #709b1d;">
						<i class="fa fa-caret-square-o-right"></i>
					</button>
				</div>
			</div>
		</div>
		<div class="feature-content">
			<div class="row">
				<?php
				foreach ($data as $k => $v) {
				?>
				<div class="col-xs-3">
					<div class="item-product">
						<div class="item-product-img">
							<a href="<?php echo PATH;?>/?controller=product&action=detail&id=<?php echo $v['modem'];?>"><img src="assets/images/1.jpg" width="100%" height="230px"></a>
						</div>
						<div class="item-product-desc">
							<div class="item-product-name"><a href="<?php echo PATH;?>/?controller=product&action=detail&id=<?php echo $v['modem'];?>"><?php echo $v['ProductName'];?></a></div>
							<div class="item-product-func">
								<div class="row">
									<div class="col-xs-6 btn-add-cart" style="text-align: center;">
										<a href="<?php echo PATH;?>/?controller=cart&action=add&modem=<?php echo $v['modem'];?>">
											<button type="button" class="btn btn-default btn-sm form-control item-product-func-cart">
									        	<span class="glyphicon glyphicon-shopping-cart"></span> 
									        	<span class="add-cart">Add to Cart</span>
									        </button>
								    	</a>
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

							<div class="item-product-price">
								<div class="row">
									<div class="col-xs-6" style="text-align: right; color: #696969;">
										<s>$10000</s>
									</div>
									<div class="col-xs-6" style="text-align: left; color: #709b1d;">
										<?php echo $v['UnitPrice'];?>
									</div>
								</div>
								<div class="item-product-rate">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>

						</div>
						<div class="product-item-hotsale">
							<div id="discount">-20%</div>
						</div>
					</div>
				</div>
				<?php
				}
				?>

			</div>
		</div>
	</div><!--end #future-->

	<div id="offer" class="container">
		<div class="offer-container">
			<div class="row">
				<div class="col-xs-6 offer-img">
					<img src="assets/images/offer.jpg" width="100%" height="400px">
				</div>
				<div class="col-xs-6 offer-content">
					<div class="row offer-title">
						<div class="col-xs-12">
							50% OFF
						</div>
					</div>
					<div class="row" style="text-align: center; margin-top: 20px;">
						<div class="col-xs-12">
							<span class="offer-time">13 days</span>
							<span class="offer-time">13 days</span>
							<span class="offer-time">13 days</span>
							<span class="offer-time">13 days</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--end #offer-->

	<div id="subcribe" class="container-fluid">
		<div id="subcribe-color" style="height: 200px">
			<div class="row">
				<div class="col-xs-12" style="font-size: 30px;">
					SUBCRIBE FOR GET OFFER UPDATE
				</div>
				<div class="col-xs-12">
					<input type="text" name="txtSubscribe" id="txtSubscribe" placeholder="Type your email">
					<input type="button" name="" value="Let go!">
				</div>
			</div>
		</div>
	</div><!--end #subscribe-->

	<div id="category" class="container">
		<div class="feature-title">
			<div class="row">
				<div class="col-xs-1" style="height: 29px; line-height: 29px">
					<button style="font-size:16px;color: #709b1d;">
						<i class="fa fa-caret-square-o-left"></i>
					</button>
				</div>
				<div class="col-xs-10 feature-title-center">
					<ul>
						<li class="active"><a href="#">LABTOP</a></li>
					</ul>
				</div>
				<div class="col-xs-1" style="height: 29px; line-height: 29px; text-align: right;">
					<button style="font-size:16px;color: #709b1d;">
						<i class="fa fa-caret-square-o-right"></i>
					</button>
				</div>
			</div>
		</div>
		<div class="feature-content">
			<div class="row">
				<div class="col-xs-3">
					<div class="item-product">
						<div class="item-product-img"><a href=""><img src="assets/images/1.jpg" width="100%" height="230px"></a></div>
						<div class="item-product-desc">
							<div class="item-product-name"><a href="#"> Smart Phone Primo V1</a></div>
							<div class="item-product-func">
								<div class="row">
									<div class="col-xs-8" style="text-align: left;">
										<button type="button" class="btn btn-default btn-sm form-control">
								        	<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
								        </button>
									</div>
									<div class="col-xs-4" style="text-align: right;">
										<button type="button" class="btn btn-default btn-sm form-control">
								        	<span class="glyphicon glyphicon-edit"></span>
								        </button>
									</div>
								</div>
							</div>

							<div class="item-product-price">
								<div class="row">
									<div class="col-xs-6" style="text-align: right; color: #696969;">
										<s>$10000</s>
									</div>
									<div class="col-xs-6" style="text-align: left; color: #709b1d;">
										$8000
									</div>
								</div>
								<div class="item-product-rate">
									<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-xs-3">
					<div class="item-product">
						<div class="item-product-img"><a href=""><img src="assets/images/2.jpg" width="100%" height="230px"></a></div>
						<div class="item-product-desc">
							<div class="item-product-name"><a href="#"> Smart Phone Primo V1</a></div>
							<div class="item-product-func">
								<div class="row">
									<div class="col-xs-8" style="text-align: left;">
										<button type="button" class="btn btn-default btn-sm form-control">
								        	<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
								        </button>
									</div>
									<div class="col-xs-4" style="text-align: right;">
										<button type="button" class="btn btn-default btn-sm form-control">
								        	<span class="glyphicon glyphicon-edit"></span>
								        </button>
									</div>
								</div>
							</div>

							<div class="item-product-price">
								<div class="row">
									<div class="col-xs-6" style="text-align: right; color: #696969;">
										<s>$10000</s>
									</div>
									<div class="col-xs-6" style="text-align: left; color: #709b1d;">
										$8000
									</div>
								</div>
								<div class="item-product-rate">
									<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
								</div>
							</div>

						</div>
					</div>
				</div>
				
				<div class="col-xs-3">
					<div class="item-product">
						<div class="item-product-img"><a href=""><img src="assets/images/1.jpg" width="100%" height="230px"></a></div>
						<div class="item-product-desc">
							<div class="item-product-name"><a href="#"> Smart Phone Primo V1</a></div>
							<div class="item-product-func">
								<div class="row">
									<div class="col-xs-8" style="text-align: left;">
										<button type="button" class="btn btn-default btn-sm form-control">
								        	<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
								        </button>
									</div>
									<div class="col-xs-4" style="text-align: right;">
										<button type="button" class="btn btn-default btn-sm form-control">
								        	<span class="glyphicon glyphicon-edit"></span>
								        </button>
									</div>
								</div>
							</div>

							<div class="item-product-price">
								<div class="row">
									<div class="col-xs-6" style="text-align: right; color: #696969;">
										<s>$10000</s>
									</div>
									<div class="col-xs-6" style="text-align: left; color: #709b1d;">
										$8000
									</div>
								</div>
								<div class="item-product-rate">
									<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-xs-3">
					<div class="item-product">
						<div class="item-product-img"><a href=""><img src="assets/images/2.jpg" width="100%" height="230px"></a></div>
						<div class="item-product-desc">
							<div class="item-product-name"><a href="#"> Smart Phone Primo V1</a></div>
							<div class="item-product-func">
								<div class="row">
									<div class="col-xs-8" style="text-align: left;">
										<button type="button" class="btn btn-default btn-sm form-control">
								        	<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
								        </button>
									</div>
									<div class="col-xs-4" style="text-align: right;">
										<button type="button" class="btn btn-default btn-sm form-control">
								        	<span class="glyphicon glyphicon-edit"></span>
								        </button>
									</div>
								</div>
							</div>

							<div class="item-product-price">
								<div class="row">
									<div class="col-xs-6" style="text-align: right; color: #696969;">
										<s>$10000</s>
									</div>
									<div class="col-xs-6" style="text-align: left; color: #709b1d;">
										$8000
									</div>
								</div>
								<div class="item-product-rate">
									<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div><!--end #category-->