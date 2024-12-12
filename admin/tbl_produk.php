<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM product ORDER BY id_product ASC");
?>

<div class="main-card card">
  <div class="card-body table-area table-responsive">
   <div class="table-header">
      
    </div>  
    <div class="table-body">
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>#</th>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Slug</th>
            <th>Harga</th>
            <th>Diskon</th>
            <th>Kategori</th>
            <th>Sub Kategori</th>
            <th>Total</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        foreach($sql as $produk):
        ?>
          <tr>
            <td><input type="checkbox" name=""></td>
            <td><?= $produk['id_product'];?></td>
            <td><img src="../assets/img/product/<?= $produk['product_image']?>" width="50"></td>
            <td><?= $produk['product_name'];?></td>
            <td><?= $produk['product_slug'];?></td>
            <td><?= $produk['product_price'];?></td>
            <td><?= $produk['product_discount'];?></td>
            <td><?= $produk['product_category'];?></td>
            <td><?= $produk['product_subcategory'];?></td>
            <td><?= $produk['product_quantity'];?></td>
            <td>
              <a href="index.php?q=ubah_produk&product_slug=<?= $produk['product_slug'];?>" class="btn btn-sm btn-success">Edit</a>
              <a href="hapus_produk.php?q=hapus_produk&product_slug=<?= $produk['product_slug'];?>" class="btn btn-sm btn-danger">Hapus</a>
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

