<?php

$slug = $_GET['blog_slug'];
$kondisi = "WHERE blog_slug = '$slug'";
$table = 'blog';
$field = '*';
$sql = readBlog($table,$field);
$fetch = mysqli_fetch_array($sql);

if(isset($_POST['ubah'])){
	$judul = $_POST['judul'];
  $slug = preg_replace("~[^-\w]+~","-",strtolower($_POST['judul']));
  $isi = $_POST['isi'];
  $nama_file = $_FILES['gambar']['name'];
  $source = $_FILES['gambar']['tmp_name'];
  $folder = "../assets/img/blog/";
  $exe_img = move_uploaded_file($source,$folder.$nama_file);
	$table = 'blog';
	$field = array('id_blog','blog_title','blog_slug','blog_content','blog_image');
	$value = array("null","'$judul'","'$slug'","'$isi'","'$nama_file'");
	createBlog($table,$field,$value);
}
?>

<div class="main-card card create-form-area">
  <form action="" method="POST" enctype="multipart/form-data"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" value="<?= $fetch['blog_title'];?>" class="form-control" name="judul" placeholder="Title">
      </div>
      <div class="form-group">
        <textarea name="isi" class="" id="content"><?= $fetch['blog_content'];?></textarea>
      </div>
      <div class="form-group">
        <input type="file" class="form-control" name="gambar">
      </div>     
      <button class="btn btn-primary" name="ubah" type="submit" id="btn-ubah">Tambah</button>
      <a href="index.php?q=blog" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>
