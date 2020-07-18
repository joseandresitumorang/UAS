<?php 
include 'koneksi.php';
 
$id = $_POST['id'];
$jenis_zakat = $_POST['jenis_zakat'];
$nominal = $_POST['nominal'];
$nama = $_POST['nama'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];
$bank = $_POST['bank'];
$no_rek = $_POST['no_rek'];
 
mysqli_query($koneksi,"update zakat set jenis_zakat='$jenis_zakat', nominal='$nominal', nama='$nama', no_tlp='$no_tlp', email='$email', bank='$bank', no_rek='$no_rek' where id='$id'");

 
header("location:home.php");
 
?>