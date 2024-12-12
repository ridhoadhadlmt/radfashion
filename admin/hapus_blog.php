<?php

include '../function.php';
include '../koneksi.php';

$slug = $_GET['blog_slug'];

$table = 'blog';
$kondisi = "WHERE blog_slug = '$slug'";

deleteBlog($table,$kondisi);

?>
