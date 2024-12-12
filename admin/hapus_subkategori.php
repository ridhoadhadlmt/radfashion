<?php

include '../function.php';
include '../koneksi.php';

$slug = $_GET['subcategory_slug'];

$table = 'subcategory';
$kondisi = "WHERE subcategory_slug = '$slug'";

deleteSubcategory($table,$kondisi);

?>