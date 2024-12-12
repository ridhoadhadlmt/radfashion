<?php

$slug = $_GET['subcategory_slug'];
$kondisi = "WHERE subcategory_slug = '$slug'";
$table = 'subcategory';
$field = '*';
$sql = readSubcategory($table,$field,$kondisi);
$fetch = mysqli_fetch_array($sql);


if(isset($_POST['ubah'])){
  $kondisi = "WHERE subcategory_slug = '$slug'";
	$subkategori = $_POST['nama_subkategori'];
  $slug = preg_replace("~[^-\w]+~","-",strtolower($_POST['nama_subkategori']));
	$table = 'subcategory';
	$field = "subcategory_name = '$subkategori', subcategory_slug = '$slug'";
	updateCategory($table,$field,$kondisi);
}

?>

<div class="main-card card create-form-area">
  <form action="" method="POST"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" class="form-control"  value="<?= $fetch['subcategory_name']; ?>" name="nama_subkategori" placeholder="Kategori">
      </div>
      
      <button class="btn btn-primary" name="ubah" type="submit" id="btn-update">Ubah</button>
      <a href="index.php?q=subkategori" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>
