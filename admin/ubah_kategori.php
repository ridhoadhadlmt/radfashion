<?php

$slug = $_GET['category_slug'];
$kondisi = "WHERE category_slug = '$slug'";
$table = 'category';
$field = '*';
$sql = readCategory($table,$field,$kondisi);
$fetch = mysqli_fetch_array($sql);


if(isset($_POST['ubah'])){
	$kategori = $_POST['nama_kategori'];
  $slug = preg_replace("~[^-\w]+~","-",strtolower($_POST['nama_kategori']));
	$table = 'category';
	$field = "category_name = '$kategori', category_slug = '$slug'";
	updateCategory($table,$field,$kondisi);
}

?>

<div class="main-card card create-form-area">
  <form action="" method="POST"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" class="form-control"  value="<?= $fetch['category_slug']; ?>" name="nama_kategori" placeholder="Kategori">
      </div>
      
      <button class="btn btn-primary" name="ubah" type="submit" id="btn-update">Ubah</button>
      <a href="index.php?q=kategori" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>
