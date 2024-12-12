<?php

	include_once 'header.php';
	
?>

<section class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-header">
					<h4>SHOP</h4>
				</div>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active">Shop</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="shop">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="shop-filter">
					<div class="accordion" id="accordion">
					 	<div class="card" id="">
					 	 <?php
					 	 	$sql = "SELECT * FROM category";
					 	 	$result = $koneksi->query($sql);
					 	 ?>	
					      	<div class="card-header">
						      <a class="" type="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          Kategori <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span>
					      	  </a>
					      	</div>
					      <div id="collapseOne" class="collapse show" aria-labelledby="" data-parent="#accordion">
					        <div class="card-body">
				        	<?php
				         		foreach($result as $kategori):
				         	?>	
					         <p href=""><input type="checkbox" value="<?= $kategori['category_name'];?>" id="kategori" name=""> <span class="produk_check pl-2"><?= $kategori['category_name'];?></span></p>
					         <?php
					         	endforeach;
					         ?>
					      	</div>
					      </div>
					    </div>
					    <div class="card" id="">
					 	 <?php
					 	 	$sql = "SELECT * FROM subcategory";
					 	 	$result = $koneksi->query($sql);
					 	 ?>	
					      	<div class="card-header" id="">
						      <a class="" type="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          Subkategori <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span>
					      	  </a>
					      	</div>
					      <div id="collapseTwo" class="collapse show" aria-labelledby="" data-parent="#accordion">
					        <div class="card-body">
				        	<?php
				         		foreach($result as $subkategori):
				         	?>	
					         <p href=""><input type="checkbox" value="<?= $subkategori['subcategory_name'];?>" id="subkategori" name=""> <span class="produk_check pl-2"><?= $subkategori['subcategory_name'];?></span></p>
					         <?php
					         	endforeach;
					         ?>
					      	</div>
					      </div>
					    </div>
					    <div class="card" id="">
					      	<div class="card-header">
						      <a class="" type="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
					          Size <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span>
					      	  </a>
					      	</div>
					      <div id="collapseThree" class="collapse show" aria-labelledby="" data-parent="#accordion">
					        <div class="card-body">
				        		<div class="filter-size">
				        			<label for="xs" class>
				        				XS
				        				<input type="radio" id="xs" name="">
				        			</label>
				        			<label for="sm" class>
				        				S
				        				<input type="radio" id="sm" name="">
				        			</label>
				        			<label for="md" class>
				        				M
				        				<input type="radio" id="md" name="">
				        			</label>
				        			<label for="lg" class>
				        				L
				        				<input type="radio" id="lg" name="">
				        			</label>
				        			<label for="xl" class>
				        				XL
				        				<input type="radio" id="xl" name="">
				        			</label>
				        			<label for="xxl" class>
				        				XXL
				        				<input type="radio" id="xxl" name="">
				        			</label>
				        		</div>
					      	</div>
					      </div>
					    </div>
					    <div class="card" id="">
					      	<div class="card-header">
						      <a class="" type="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
					          Tags <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span>
					      	  </a>
					      	</div>
					      <div id="collapseThree" class="collapse show" aria-labelledby="" data-parent="#accordion">
					        <div class="card-body">
				        		<div class="filter-tags">
				        			<a href="#">Product</a>
									<a href="#">Bags</a>
									<a href="#">Shoes</a>
									<a href="#">Fashio</a>
									<a href="#">Clothing</a>
									<a href="#">Hats</a>
									<a href="#">Accessories</a>
				        		</div>
					      	</div>
					      </div>
					    </div>
					</div>    
				</div>
			</div>
			<div class="col-lg-9">
				<div class="shop-product">
					<div class="row">
						<?php
							$search_category = $_GET['search_category'];
							$search_text = $_GET['search_text'];
							$sql = "SELECT * FROM product WHERE product_category LIKE '$search_category%' AND product_name LIKE '$search_text%'";
							$exe = mysqli_query($koneksi,$sql);
							foreach($exe as $produk):
						?>
						<div class="col-lg-4">
							<div class="product-item">
								<div class="product-item-img">
									<img src="assets/img/product/<?= $produk['product_image']; ?>">
								</div>
								<div class="product-item-text">
									<div class="discount"><?= $produk['product_discount']; ?> %</div>
									<h6 class="name"><?= $produk['product_name']; ?></h6>
									<h5 class="price">
									<?php
										$diskon = $produk['product_discount'];
										$harga = $produk['product_price'];
										$harga_diskon = $produk['product_price']- $produk['product_discount']* $produk['product_price'] /100;		
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
			</div>
		</div>
	</div>
</section>
<?php

	include_once 'footer.php';
	
?>