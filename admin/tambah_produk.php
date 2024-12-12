<?php
  
if(isset($_POST['tambah'])){
	$nama_produk = $_POST['nama_produk'];
  $slug = preg_replace("~[^-\w]+~","-",strtolower($_POST['nama_produk']));
	$harga = $_POST['harga'];
  $diskon = $_POST['diskon'];
  $harga_diskon = $_POST['harga'] - $_POST['diskon'] /100;
	$kategori = $_POST['kategori'];
  $subkategori = $_POST['subkategori'];
	$jumlah = $_POST['jumlah'];
  $nama_file = $_FILES['gambar']['name'];
	$source = $_FILES['gambar']['tmp_name'];
	$folder = "../assets/img/product/";
	$exe_img = move_uploaded_file($source,$folder.$nama_file);
	$table = 'product';
	$field = array('id_product,product_name,product_slug,product_price,product_discount,product_category,product_subcategory,product_quantity,product_image');
	$value = array("null","'$nama_produk'","'$slug'","'$harga'","'$diskon'","'$kategori'","'$subkategori'","'$jumlah'","'$nama_file'");
	createProduct($table,$field,$value);
}
?>

<div class="main-card card create-form-area">
  <form action="" method="POST" enctype="multipart/form-data"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Harga" name="harga">
      </div>
      <div class="form-group">
        <input type="number" class="form-control" value="8" placeholder="Diskon" name="diskon">
      </div>  
      <div class="form-group">
        <select class="form-control" id="kategori" name="kategori">
          <option>Pilih Kategori</option>
          <?php
            $sql = "SELECT * FROM category";
            $exe = mysqli_query($koneksi,$sql);
            foreach($exe as $kategori):
          ?>
          <option value="<?= $kategori['category_name'];?>"><?= $kategori['category_name'];?></option>
          <?php
            endforeach;
          ?> 
        </select>
      </div>        
      <div class="form-group">
        <select class="form-control" id="subkategori" name="subkategori">
        <option value="">Subkategori</option>
          <?php
            echo$sql = "SELECT * FROM subcategory";
            $exe = mysqli_query($koneksi,$sql);
            foreach($exe as $subkategori):
          ?>
          <option value="<?= $subkategori['subcategory_name'];?>"><?= $subkategori['subcategory_name'];?></option>
          <?php
            endforeach;
          ?> 
        </select>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
      </div>
      <!-- <div class="form-group">
        <textarea name="deskripsi" class="ckeditor" id="ckeditor"></textarea>
      </div> -->
      <div class="form-group">
        <input type="file" class="" placeholder="" class="form-control" name="gambar">
      </div>
      <button class="btn btn-primary" name="tambah" type="submit" id="btn-tambah">Tambah</button>
      <a href="index.php?q=produk" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>
