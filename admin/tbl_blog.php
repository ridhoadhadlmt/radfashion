<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM blog ORDER BY id_blog ASC");
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
            <th width="10%">Thumbnail</th>
            <th width="15%">Kategori</th>
            <th width="30%">Slug</th>
            <th width="35%">Aksi</th>
          </tr>
        </thead>
        <tbody class="">
        <?php
        $i = 1;
        foreach($sql as $blog):
        ?>
          <tr>
            <td width="5%"><input type="checkbox" name=""></td>
            <td width="5%"><?= $i ?></td>
            <td width="10%"><img src="../assets/img/blog/<?= $blog['blog_image']?>" width="50"></td>
            <td width="15%"><?= $blog['blog_title'] ?></td>
            <td width="30%"><?= $blog['blog_slug'] ?></td>
            <td width="35%">
              <a href="index.php?q=ubah_blog&blog_slug=<?= $blog['blog_slug'];?>" class="btn btn-sm btn-success">Edit</a>
              <a href="hapus_blog.php?hapus_blog&blog_slug=<?= $blog['blog_slug']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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
