<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM subcategory JOIN category ON subcategory.id_category = category.id_category");

?>


<div class="main-card card">
  <div class="card-body table-area">
    <div class="table-header">
      
    </div>  
    <div class="table-body">
      <table class="table table-striped table-hover ">
        <thead class="">
          <tr>
            <th width="5%">#</th>
            <th width="5%">No</th>
            <th width="15%">Sub Kategori</th>
            <th width="10%">Kategori</th>
            <th width="30%">Slug</th>
            <th width="25%">Aksi</th>
          </tr>
        </thead>
        <tbody class="">
        <?php
        $i = 1;
        foreach($sql as $subkategori):
        ?>
          <tr>
            <td width="5%"><input type="checkbox" name=""></td>
            <td width="5%"><?= $i ?></td>
            <td width="15%"><?= $subkategori['subcategory_name'] ?></td>
            <td width="30%"><?= $subkategori['category_name'] ?></td>
            <td width="15%"><?= $subkategori['subcategory_slug'] ?></td>
            <td width="45%">
              <a href="index.php?q=ubah_subkategori&subcategory_slug=<?= $subkategori['subcategory_slug'];?>" class="btn btn-sm btn-success">Edit</a>
              <a href="hapus_subkategori.php?q=hapus_subkategori&subcategory_slug=<?= $subkategori['subcategory_slug'];?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
          </tr>
          <?php
          $i++;
        endforeach;
          ?>
        </tbody>
      </table>
    </div> 
  </div>
</div>
