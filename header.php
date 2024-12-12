<?php
	include 'koneksi.php';
	include 'function.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>rad-fashion</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>
<body>


<header class="header">
	<div class="header-top">
		<div class="container d-flex justify-content-between">
			<div class="header-top-left">
				Free shipping, 30-day return or refund guarantee.
			</div>
			<div class="header-top-right">
				<div class="auth">
					<a href="auth/register.php" class="register-auth">Register</a>
					<a href="auth/login.php" class="login-auth">Login</a>
					
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<nav class="navbar navbar-expand-md">
			<div class="container d-flex justify-content-between">
				<div class="header-logo justify-content-start">
					<a href="index.php" class="navbar-brand">radfashion.</a>
				</div>
				<div class="header-search">
					<form action="shop.php?" method="GET">
						<div class="input-group">
							<select class="select" name="search_category">
								<option>Kategori</option>
								<?php
									$sql = "SELECT * FROM category";
									$exe = mysqli_query($koneksi,$sql);
									foreach($exe as $kategori):
								?>
								<option value="<?= $kategori['category_slug'];?>"><?= $kategori['category_name']?></option>
								<?php
									endforeach;
								?>
							</select>
							<input type="text" class="form-control" name="search_text" placeholder="Cari">
							<div class="input-group-append">
								<button class="btn btn-search"><i class="ion ion-ios-search"></i></button>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-md-4">
								<div class="date-search">
									<input type="text" name="" class="form-control">
									<i class="ion ion-ios-calendar"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="text-search">
									<input type="" class="form-control" placeholder="Cari" name="">
								</div>
							</div>
							<div class="col-md-4">
								<button class="btn btn-search">Cari</button>
							</div>
						</div> -->
					</form>
				</div>
				<div class="header-menu">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a href="" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="shop.php" class="nav-link">Shop</a>
						</li>
						<li class="nav-item">
							<a href="blog.php" class="nav-link">Blog</a>
						</li>
						<li class="nav-item">
							<a href="contact.php" class="nav-link">Contact</a>
						</li>
					</ul>
				</div>
				<div class="header-option justify-content-end">
					<div class="option wishlist-option">
						<a href=""><i class="ion ion-ios-heart"></i></a>
						<div class="badge badge-danger qty">0</div>

					</div>
					<div class="option cart-option">
						<a href=""><i class="ion ion-ios-cart"></i></a>
						<div class="badge badge-danger qty">0</div>
					</div>
				</div>
				
			</div>

		</nav>
	</div>
</header>