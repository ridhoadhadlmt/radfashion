<?php 
include '../koneksi.php';
include '../function.php';

// if($_SESSION['admin']==""||$_SESSION['admin']==""){ 
//   header('location:../auth/login.php?message=error');
// }


if(isset($_GET['q'])){
  $q = $_GET['q'];
}
else{
  $q = null;
}
?>


<?php
  
  include_once 'header.php';
  
?>

<div class="wrapper">
  <div class="sidebar-wrapper">  
    <div class="sidebar-profile">
      <div class="profile-img">
        <img src="{{ asset('img/author/ridho.jpg') }}" class="rounded-circle" width="50" height="50">
      </div>
      <div class="profile-info">
        <h6 class="username">Ridho Adha</h6>
        <h6 class="level">Admin</h6>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul class="navbar-nav">
        <li class="sidebar-heading">Dashboard</li>
        <li class="nav-item">
          <a href="index.php" class="nav-link"><i class="ion ion-ios-pie"></i> Dashboard</a>
        </li>
        
        <li class="nav-item" data-toggle="collapse" href="#product" role="button" aria-expanded="false" aria-controls="product">
          <a class="nav-link"><i class="ion ion-ios-create"></i> Produk<span class="float-right"><i class="ion ion-ios-arrow-down"></i></span></a>
          <div class="collapse" id="product">
            <nav class="nav flex-column sub-menu">
              <li class="nav-item ">
                <a href="index.php?q=produk" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> List Produk</a>
              </li>
              <li class="nav-item ">
                <a href="index.php?q=tambah_produk" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> Tambah Produk</a>
              </li>
              
              
            </nav>
          </div>        
        </li>
        <li class="nav-item" data-toggle="collapse" href="#brand" role="button" aria-expanded="false" aria-controls="brand">
          <a class="nav-link"><i class="ion ion-ios-create"></i> Merek<span class="float-right"><i class="ion ion-ios-arrow-down"></i></span></a>
          <div class="collapse" id="brand">
            <nav class="nav flex-column sub-menu">
              <li class="nav-item ">
                <a href="index.php?q=merek" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> List Merek</a>
              </li>
              <li class="nav-item ">
                <a href="index.php?q=tambah_merek" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> Tambah Merek</a>
              </li>
              
              
            </nav>
          </div>        
        </li>
        <li class="nav-item" data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="category">
          <a class="nav-link"><i class="ion ion-ios-bookmark"></i> Kategori<span class="float-right"><i class="ion ion-ios-arrow-down"></i></span></a>
          <div class="collapse" id="category">
            <nav class="nav flex-column sub-menu">
              <li class="nav-item ">
                <a href="index.php?q=kategori" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> List Kategori</a>
              </li>
              <li class="nav-item ">
                <a href="index.php?q=tambah_kategori" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> Tambah Kategori</a>
              </li>
              
            </nav>
          </div>        
        </li>
        <li class="nav-item" data-toggle="collapse" href="#subcategory" role="button" aria-expanded="false" aria-controls="subcategory">
          <a class="nav-link"><i class="ion ion-ios-bookmark"></i> Sub Kategori<span class="float-right"><i class="ion ion-ios-arrow-down"></i></span></a>
          <div class="collapse" id="subcategory">
            <nav class="nav flex-column sub-menu">
              <li class="nav-item">
                <a href="index.php?q=subkategori" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> List Subcategory</a>
              </li>
              <li class="nav-item">
                <a href="index.php?q=tambah_subkategori" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> New Subcategory</a>
              </li>
              
            </nav>
          </div>        
        </li>
        <li class="nav-item" data-toggle="collapse" href="#blog" role="button" aria-expanded="false" aria-controls="blog">
          <a class="nav-link"><i class="ion ion-ios-bookmark"></i> Blog<span class="float-right"><i class="ion ion-ios-arrow-down"></i></span></a>
          <div class="collapse" id="blog">
            <nav class="nav flex-column sub-menu">
              <li class="nav-item">
                <a href="index.php?q=blog" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> List Blog</a>
              </li>
              <li class="nav-item">
                <a href="index.php?q=tambah_blog" class="nav-link"><i class="ion ion-ios-radio-button-on"></i> New Blog</a>
              </li>
              
            </nav>
          </div>        
        </li>
      </ul>
    </div>
  </div>
  <div class="main-wrapper">
    <div class="main-header">
      <div class="header-logo">
        <a href="index.php" class="navbar-brand">rad-admin</a> 
      </div>
      <nav class="navbar navbar-expand-md">
        <button class="btn btn-toggle" id="menu-toggle"><i class="ion ion-ios-menu"></i></button>
        <form method="GET" action="" class="form-search">
          <input type="text" class="form-control" placeholder="Search.." name="">
          <button class="btn btn-search"><i class="ion ion-ios-search"></i></button>
          
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="ion ion-ios-notifications"></i>
              <span class="badge badge-danger">0</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="ion ion-ios-mail"></i>
              <span class="badge badge-info">1</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="../auth/logout.php" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul> 
      </nav>
    </div>
    <div class="main-content">
      <div class="content-header">
        <h4 class="content-title">
          <i class="ion ion-ios-pie">
          </i>
          
        </h4>
        <nav class="breadcrumb">
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item active"></li>
        </nav>
      </div>
      <?php
        if($q == null){
          include 'dashboard.php';
        }
        else{
          if($q == 'produk'){
            include 'tbl_produk.php';
          }
          if($q == 'tambah_produk'){
            include 'tambah_produk.php';
          }
          if($q == 'ubah_produk'){
            include 'ubah_produk.php';
          }
          if($q == 'kategori'){
            include 'tbl_kategori.php';
          }
          if($q == 'tambah_kategori'){
            include 'tambah_kategori.php';
          }
          if($q == 'ubah_kategori'){
            include 'ubah_kategori.php';
          }
          if($q == 'subkategori'){
            include 'tbl_subkategori.php';
          }
          if($q == 'tambah_subkategori'){
            include 'tambah_subkategori.php';
          }
          if($q == 'ubah_subkategori'){
            include 'ubah_subkategori.php';
          }
          if($q == 'tambah_merek'){
            include 'tambah_merek.php';
          }
          if($q == 'ubah_merek'){
            include 'ubah_merek.php';
          }
          if($q == 'blog'){
            include 'tbl_blog.php';
          }
          if($q == 'tambah_blog'){
            include 'tambah_blog.php';
          }
          if($q == 'ubah_blog'){
            include 'ubah_blog.php';
          }
          
        }

      ?>
    </div>
  </div>

</div>


<?php

  include_once 'footer.php';

?>



  