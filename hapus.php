<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from zakat where id='$id'");
header("location:home.php");
 
?>