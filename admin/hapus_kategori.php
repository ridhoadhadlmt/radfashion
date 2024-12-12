<?php

include '../function.php';
include '../koneksi.php';

$slug = $_GET['category_slug'];

$table = 'category';
$kondisi = "WHERE category_slug = '$slug'";

deleteCategory($table,$kondisi);

?>