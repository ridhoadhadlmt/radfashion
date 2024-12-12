<?php
include_once 'header.php';
?>

<section class="hero">
	<div class="hero-slider owl-carousel">
		<div class="hero-items set-bg" data-setbg="assets/img/hero/hero-1.jpg" style="background-image: url('assets/img/hero/hero-1.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-7 col-md-8">
						<div class="hero-text">
							<h6>Summer Collection</h6>
							<h1>Fall - Winter Collections 2030</h1>
							<p>A specialist label creating luxury essentials. Ethically crafted with an unwavering</p>
							<button class="btn">Shop Now <i class="ion ios-arrow-forward"></i></button>
						</div>
						<div class="hero-social">
							<a href=""><i class="ion ion-logo-facebook"></i></a>
							<a href=""><i class="ion ion-logo-whatsapp"></i></a>
							<a href=""><i class="ion ion-logo-instagram"></i></a>
							<a href=""><i class="ion ion-logo-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-items set-bg" data-setbg="assets/img/hero/hero-2.jpg" style="background-image	: url('assets/img/hero/hero-2.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-7 col-md-8">
						<div class="hero-text">
							<h6>Summer Collection</h6>
							<h1>Fall - Winter Collections 2030</h1>
							<p>A specialist label creating luxury essentials. Ethically crafted with an unwavering</p>
							<button class="btn">Shop Now <i class="ion ios-arrow-forward"></i></button>
						</div>
						<div class="hero-social">
							<a href=""><i class="ion ion-logo-facebook"></i></a>
							<a href=""><i class="ion ion-logo-whatsapp"></i></a>
							<a href=""><i class="ion ion-logo-instagram"></i></a>
							<a href=""><i class="ion ion-logo-twitter"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>	
	</div>
</section>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 offset-md-4">
				<div class="banner-item ">
					<div class="banner-item-text">
						<h2>Clothing Collections 2030</h2>
						<a href="">Shop Now</a>
					</div>
					<div class="banner-item-img">
						<img src="assets/img/banner/banner-1.jpg">
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="banner-item banner-item-middle">
					<div class="banner-item-img">
						<img src="assets/img/banner/banner-2.jpg">
					</div>
					<div class="banner-item-text">
						<h2>Accessories</h2>
						<a href="">Shop Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="banner-item banner-item-last">
					<div class="banner-item-text">
						<h2>Shoes Spring </h2>
						<a href="">Shop Now</a>
					</div>
					<div class="banner-item-img">
						<img src="assets/img/banner/banner-3.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="product">
	<div class="container">
		<!-- <div class="row">
			<div class="col-lg-12">
				<div class="d-flex justify-content-center filter-control">
					<a href="" class="nav-link">Best Seller</a>
					<a href="" class="nav-link">New Arrival</a>
					<a href="" class="nav-link">Hot Saller</a>	
				</div>
			</div>
		</div> -->
		<div class="row">
			<?php
				if(date("d")== date("m")){
					$sql = "UPDATE product SET product_discount = 20";
					$exe = mysqli_query($koneksi,$sql);	
				}
				else{
					$sql = "UPDATE product SET product_discount = 8";
					$exe = mysqli_query($koneksi,$sql);

				}
				$sql = "SELECT * FROM product";
				$exe = mysqli_query($koneksi,$sql);
				foreach($exe as $item):
			?>
			<div class="col-lg-3">
				<div class="product-item">
					<div class="product-item-img">
						<img src="assets/img/product/<?= $item['product_image']?>">
					</div>
					<div class="product-item-text">
						<div class="discount"><?= $item['product_discount'];?> %</div>
						<h6 class="name"><?= $item['product_name'] ?></h6>
						<s>Rp. <?= $item['product_price'];?></s>
						<h5 class="price">
							<?php
								$diskon = $item['product_discount'];
								$harga = $item['product_price'];
								$harga_diskon = $item['product_price']- $item['product_discount']* $item['product_price'] /100;
							?>
							Rp. <?= number_format($harga_diskon,0,'.','.') ?></h5>
					</div>
				</div>
			</div>
				<?php
					endforeach;

				?>
		</div>
	</div>
</section>

<section class="flashsale">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="flashsale-text">
					<h2>Clothings Hot <br>Shoe Collection <br> Accessories</h2>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="flashsale-product">
					<img src="assets/img/flashsale.png" class="w-100">
					<div class="flashsale-sticker">
						<div class="flashsale-sticker-text">
							<h6>Sale Of</h6>
							<h5>Rp. 300.00</h5>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-4 offset-lg-1">
				<div class="flashsale-countdown">
					<h6>DEAL OF THE WEEK</h6>
					<h2>Multi-pocket Chest Bag Black</h2>
					<div class="flashsale-countdown-timer" id="countdown">
						<!-- <div class="cd-item">
							<span>30</span>
							<p></p>
						</div>
						<div class="cd-item">
							<span>30</span>
							<p></p>
						</div>
						<div class="cd-item">
							<span>30</span>
							<p></p>
						</div> -->
					</div>
					<button class="btn">SHOP NOW</button>
				</div>
			</div>				
		</div>
	</div>
</section>

<section class="blog">
	<div class="container">
		<div class="title text-center">
			<h6>Latest Blog</h6>
			<h1>Fashion Blog 2030</h1>
		</div>
		<div class="row">
			<?php
				$sql = "SELECT * FROM blog LIMIT 0,3";
				$exe = mysqli_query($koneksi,$sql);
				foreach($exe as $blog):
			?>
			<div class="col-md-4">
				<div class="blog-item">
					<div class="blog-item-img">
						<img src="assets/img/blog/<?= $blog['blog_image'];?>">
					</div>
					<div class="blog-item-title">
						<h6><i class="ion ion-ios-calendar"></i> <?= $blog['created_at'];?></h6>
						<h5><?= $blog['blog_title'];?></h4>
						<a href="">Read More</a>
					</div>
				</div>
			</div>
			<?php
				endforeach;
			?>
			
		</div>
	</div>
</section>

<section class="instagram">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="instagram-img">
					<div class="instagram-item-img" data-setbg="assets/img/instagram/instagram-1.jpg" style="background-image:url('assets/img/instagram/instagram-1.jpg');">
					</div>
					<div class="instagram-item-img" data-setbg="assets/img/instagram/instagram-2.jpg" style="background-image:url('assets/img/instagram/instagram-2.jpg');">
					</div>
					<div class="instagram-item-img" data-setbg="assets/img/instagram/instagram-3.jpg" style="background-image:url('assets/img/instagram/instagram-3.jpg');">
					</div>
					<div class="instagram-item-img" data-setbg="assets/img/instagram/instagram-4.jpg" style="background-image:url('assets/img/instagram/instagram-4.jpg');">
					</div><div class="instagram-item-img" data-setbg="assets/img/instagram/instagram-5.jpg" style="background-image:url('assets/img/instagram/instagram-5.jpg');">
					</div>
					<div class="instagram-item-img" data-setbg="assets/img/instagram/instagram-6.jpg" style="background-image:url('assets/img/instagram/instagram-6.jpg');">
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="instagram-text">
					<h2>Instagram</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>
					<h3>#RADFASHION</h3>
				</div>
			</div>
		</div>
	</div>
	
</section>
<?php
include_once 'footer.php';
?>