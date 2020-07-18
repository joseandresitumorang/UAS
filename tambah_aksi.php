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
 
mysqli_query($koneksi,"insert into zakat values('','id','$jenis_zakat','$nominal','$nama','$no_tlp','$email','$bank','$no_rek')");
 
header("location:home.php");
 
?>