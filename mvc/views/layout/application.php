<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--Link tat ca toi CSS + JS cua WS se dat tai day-->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="assets/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/scripts/script.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/styles/layout.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/category.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>
<body>
	<div id="header" class="container-fluid">
		<div id="top-nav" class="container-fluid">
			<div id="top-nav-content" class="container">
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php echo PATH;?>" class="btn btn-danger" style="background-color: #fff; color: #709b1d;border: none; font-weight: bold;">
							<span class="glyphicon glyphicon-home"></span>
							Home
						</a>

						<a href="#">
							<span class="glyphicon glyphicon-user"></span> My Account
						</a>

						<a href="#">
							<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
						</a>

						<a href="#">
							<span class="glyphicon glyphicon-ok"></span> Checkout
						</a>

					</div>
				</div>
			</div>

			<div id="top-nav-logo" class="container">
				<div class="row">
					<div class="col-xs-4">
						<a href="<?php echo PATH;?>"><img src="assets/images/logo.jpg" alt="electronic"></a>
					</div>
					<div class="col-xs-8" style="text-align:right;">
						<?php
						if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
						?>
						Chào mừng: 
						<?php
						echo $_SESSION['customer'];
						}else{
						?>
						<a href="<?php echo PATH.'/?controller=customer&action=login'; ?>">LOGIN</a> or
						<a href="#">CREATE ACCOUNT</a>
						<?php 
						} 
						?>
						<a href="#" class='bt'>
							<span class="glyphicon glyphicon-edit"></span>
							<span class='txt'>20</span>
						</a>
						
						<a href="#" class='bt'>
							<span class="glyphicon glyphicon-shopping-cart"></span>
							<span class='txt'>
								<?php 
								if(isset($_SESSION['cart'])){
									echo count($_SESSION['cart']);
								}else{
									echo 0;
								}
								?>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div><!--end #header-->

	<div id="top-nav-menu">
		<nav class="navbar navbar-inverse container">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li><a href="#">smart phone</a></li>
		      <li><a href="#">labtop</a></li>
		      <li><a href="#">desktop</a></li>
		      <li><a href="#">accesories</a></li>
		      <li><a href="#">networking</a></li>
		      <li><a href="#">software</a></li>
		    </ul>
		    <form class="navbar-form navbar-right" action="<?php echo PATH.'/?controller=product&action=search';?>" method="post">
		      <div class="form-group">
		        <input type="text" class="form-control" placeholder="Search your item ..." name="txtSearch">
		      </div>
		      <input type="submit" class="btn" style="color: #fff; background-color: #709b1d;">
		      	<span class="glyphicon glyphicon-search"></span>
		    </form>
		  </div>
		</nav><!--end .navbar-->
	</div>

	<?=@ $content ?>

	<div id="brand" class="container">
		<div class="row">
			<div class="col-xs-12"><span>OUR BRAND</span></div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-xs-2">
				<div class="brand-item"><img src="assets/images/brand.jpg" width="100%" height="38px"></div>
			</div>
			<div class="col-xs-2">
				<div class="brand-item"><img src="assets/images/brand.jpg" width="100%" height="38px"></div>
			</div>
			<div class="col-xs-2">
				<div class="brand-item"><img src="assets/images/brand.jpg" width="100%" height="38px"></div>
			</div>
			<div class="col-xs-2">
				<div class="brand-item"><img src="assets/images/brand.jpg" width="100%" height="38px"></div>
			</div>
			<div class="col-xs-2">
				<div class="brand-item"><img src="assets/images/brand.jpg" width="100%" height="38px"></div>
			</div>
			<div class="col-xs-2">
				<div class="brand-item"><img src="assets/images/brand.jpg" width="100%" height="38px"></div>
			</div>

		</div>
	</div><!--end #brand-->

	<div id="footer">
		<div class="container-fluid" id="footer-link">
			<div class="container">
				<div class="row">
					<div class="col-xs-3">
						<div class="footer-link-title">INFOMATION</div>
						<div class="footer-link-content">
							<ul>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">ABOUT US</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">CUSTOMER SEVICE</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">PRIVACY POLICY</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">SITE MAP</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">CONTACT</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="footer-link-title">INFOMATION</div>
						<div class="footer-link-content">
							<ul>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">ABOUT US</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">CUSTOMER SEVICE</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">PRIVACY POLICY</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">SITE MAP</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">CONTACT</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="footer-link-title">INFOMATION</div>
						<div class="footer-link-content">
							<ul>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">ABOUT US</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">CUSTOMER SEVICE</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">PRIVACY POLICY</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">SITE MAP</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">CONTACT</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="footer-link-title">INFOMATION</div>
						<div class="footer-link-content">
							<ul>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">ABOUT US</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">CUSTOMER SEVICE</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">PRIVACY POLICY</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">SITE MAP</a></li>
								<li><span class="glyphicon glyphicon-play"></span><a href="#">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" id="footer-credit"></div>
		<div class="container-fluid" id="footer-copyright">Copyright: ABC-Corporation</div>
	</div><!--end #footer-->
</body>
</html>