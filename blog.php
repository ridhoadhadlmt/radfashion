<?php
include_once 'header.php';
?>

<section class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-header">
					<h4>BLOG</h4>
				</div>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="">Home</a></li>
					<li class="breadcrumb-item active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="blog">
	<div class="container">
		<div class="row">
			<?php
				$sql = "SELECT * FROM blog";
				$exe = mysqli_query($koneksi,$sql);
				foreach($exe as $blog):
			?>
			<div class="col-lg-4">
				<div class="blog-item">
					<div class="blog-item-img">
						<img src="assets/img/blog/<?= $blog['blog_image'];?>">
					</div>
					<div class="blog-item-title">
						<h6><i class="ion ion-ios-calendar"></i> <?= $blog['created_at'];?></h6>
						<h5><?= $blog['blog_title']?></h5>
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
<?php
include_once 'footer.php';
?>