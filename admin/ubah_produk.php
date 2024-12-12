<?php

$slug = $_GET['product_slug'];
$kondisi = "WHERE product_slug = '$slug'";
$table = 'product';
$field = '*';
$sql = readProduct($table,$field,$kondisi);
$fetch = mysqli_fetch_array($sql);


if(isset($_POST['ubah'])){
  $nama_produk = $_POST['nama_produk'];
  $slug = preg_replace("~[^-\w]+~","-",strtolower($_POST['nama_produk']));
  $harga = $_POST['harga'];
  $diskon = $_POST['diskon'];
  $kategori = $_POST['kategori'];
  $subkategori = $_POST['subkategori'];
  $jumlah = $_POST['jumlah'];
  $nama_file = $_FILES['gambar']['name'];
  $source = $_FILES['gambar']['tmp_name'];
  $folder = "../assets/img/product/";
  $exe_img = move_uploaded_file($source,$folder.$nama_file);
  $table = 'product';
  $field = "product_name = '$nama_produk',
            product_slug = '$slug',
            product_price = '$harga',
            product_discount = '$diskon',
            product_category ='$kategori',
            product_subcategory ='$subkategori',
            product_quantity = '$jumlah',
            product_image ='$nama_file'";
  updateProduct($table,$field,$kondisi);

}
?>

<div class="main-card card create-form-area">
  <form action="" method="POST" enctype="multipart/form-data"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" class="form-control" value="<?= $fetch['product_name']; ?>" placeholder="Nama Produk" name="nama_produk">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" value="<?= $fetch['product_price']; ?>" placeholder="Harga" name="harga">
      </div>
      <div class="form-group">
        <input type="number" class="form-control" value="<?= $fetch['product_discount']; ?>" placeholder="Harga" name="diskon">
      </div>  
      <div class="form-group">
        <select class="form-control" id="kategori" name="kategori">
          <option>Kategori</option>
          <?php
            $sql = "SELECT * FROM category";
            $exe = mysqli_query($koneksi,$sql);
            foreach($exe as $category):
          ?>
          <option <?php if($fetch['product_category'] == $category['category_name']) echo 'selected'; ?>><?= $category['category_name'];?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>        
      <div class="form-group">
        <select class="form-control" id="subkategori" name="subkategori">
          <option value="">Subkategori</option>
          <?php
            $sql = "SELECT * FROM subcategory";
            $exe = mysqli_query($koneksi,$sql);
            foreach($exe as $subcategory):
          ?>
          <option <?php if($fetch['product_subcategory'] == $subcategory['subcategory_name']) echo 'selected'; ?>>
            <?= $subcategory['subcategory_name'];?>
          </option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" value="<?= $fetch['product_quantity']; ?>" name="jumlah" placeholder="Jumlah">
      </div>
      <!-- <div class="form-group">
        <textarea name="deskripsi" class="ckeditor" id="ckeditor"></textarea>
      </div> -->
      <div class="form-group">
        <input type="file" class="" placeholder="" class="form-control" name="gambar">
      </div>
      <button class="btn btn-primary" name="ubah" type="submit" id="btn-update">Ubah</button>
      <a href="index.php?q=produk" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>