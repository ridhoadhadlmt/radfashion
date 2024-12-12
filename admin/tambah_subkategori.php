<?php
  
if(isset($_POST['tambah'])){
  $kategori = $_POST['nama_kategori'];
  $subkategori = $_POST['nama_subkategori'];
  $slug = preg_replace("~[^-\w]+~","-",strtolower($_POST['nama_subkategori']));
  $table = 'subcategory';
  $field = array('id_subcategory','id_category','subcategory_name','subcategory_slug');
  $value = array("null","'$kategori'","'$subkategori'","'$slug'");
  createSubcategory($table,$field,$value);
}
?>

<div class="main-card card create-form-area">
  <form action="" method="POST"> 
    <div class="card-body">
      <div class="form-group">
        <select class="form-control" name="nama_kategori">
          <option>Kategori</option>
          <?php
            $sql = "SELECT * FROM category";
            $exe = mysqli_query($koneksi,$sql);
            foreach($exe as $kategori):
          ?>
          <option value="<?= $kategori['id_category']?>"><?= $kategori['category_name']; ?></option>
          <?php
            endforeach;
          ?>
        </select>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="nama_subkategori" placeholder="Subkategori">
      </div>
      <button class="btn btn-primary" name="tambah" type="submit" id="btn-tambah">Tambah</button>
      <a href="index.php?q=subkategori" class="btn btn-danger">Batal</a>
    </div>
  </form>
</div>
