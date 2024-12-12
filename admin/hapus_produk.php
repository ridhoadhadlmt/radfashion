<?php

include '../function.php';
include '../koneksi.php';

$slug = $_GET['product_slug'];

$table = 'product';
$kondisi = "WHERE product_slug = '$slug'";

deleteProduct($table,$kondisi);
?>