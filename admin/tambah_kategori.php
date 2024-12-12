<?php
  
if(isset($_POST['tambah'])){
	$kategori = $_POST['nama_kategori'];
  $slug = preg_replace("~[^-\w]+~","-",strtolower($_POST['nama_kategori']));
	$table = 'category';
	$field = array('id_category','category_name','category_slug');
	$value = array("null","'$kategori'","'$slug'");
	createCategory($table,$field,$value);
}
?>

<div class="main-card card create-form-area">
  <form action="" method="POST"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" class="form-control" name="nama_kategori" placeholder="Kategori">
      </div>
      
      <button class="btn btn-primary" name="tambah" type="submit" id="btn-tambah">Tambah</button>
      <a href="index.php?q=kategori" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>
