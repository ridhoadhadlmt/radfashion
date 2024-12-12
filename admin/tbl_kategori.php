<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM category ORDER BY id_category ASC");
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
            <th width="15%">Kategori</th>
            <th width="30%">Slug</th>
            <th width="45%">Aksi</th>
          </tr>
        </thead>
        <tbody class="">
        <?php
        $i = 1;
        foreach($sql as $kategori):
        ?>
          <tr>
            <td width="5%"><input type="checkbox" name=""></td>
            <td width="5%"><?= $i ?></td>
            <td width="15%"><?= $kategori['category_name'] ?></td>
            <td width="30%"><?= $kategori['category_slug'] ?></td>
            <td width="45%">
              <a href="index.php?q=ubah_kategori&category_slug=<?= $kategori['category_slug'];?>" class="btn btn-sm btn-success">Edit</a>
              <a href="hapus_kategori.php?hapus_kategori&category_slug=<?= $kategori['category_slug']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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
