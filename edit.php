
<html>
<head>
	<title>Ilham Muhammad Firdauz 06TPLM007</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body,td,th {
	color: #039;
}
body {
	background-color: #0FF;
}
</style>
</head>
<body>
 
	<h2>DATA PEMBAYARAN ZAKAT</h2>
	<br/>
	<a href="home.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from zakat where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Jenis Zakat</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="jenis_zakat" value="<?php echo $d['jenis_zakat']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nominal</td>
					<td><input type="text" name="nominal" value="<?php echo $d['nominal']; ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
                <tr>
					<td>No Tlp</td>
					<td><input type="text" name="no_tlp" value="<?php echo $d['no_tlp']; ?>"></td>
				</tr>
                <tr>
					<td>e-Mail</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
                <tr>
					<td>Bank</td>
					<td><input type="text" name="bank" value="<?php echo $d['bank']; ?>"></td>
				</tr>
                <tr>
					<td>No Rek</td>
					<td><input type="text" name="no_rek" value="<?php echo $d['no_rek']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>