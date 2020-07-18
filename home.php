
<html>
<head>
	<title>Ilham Muhammad Firdauz 06TPLM007</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #3FF;
}
</style>
</head>
<body>
 
	<h2>DATA PEMBAYARAN ZAKAT</h2>
	<br/>
    
    <?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:index.php?pesan=belum_login");
        }
    ?>
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <br/>
    <a href="logout.php">LOGOUT</a>
    <br/>
	<br/>
	<a href="tambah.php">+ TAMBAH DATA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th bgcolor="#999999">No</th>
			<th bgcolor="#999999">Jenis Zakat</th>
			<th bgcolor="#999999">Nominal (Rp.)</th>
			<th bgcolor="#999999">Nama</th>
            <th bgcolor="#999999">No Telp</th>
            <th bgcolor="#999999">e-Mail</th>
            <th bgcolor="#999999">Bank</th>
            <th bgcolor="#999999">No Rekening</th>
			<th bgcolor="#999999">OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from zakat");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td align="center" bgcolor="#FFFF99"><?php echo $no++; ?></td>
				<td align="center" bgcolor="#FFFF99"><?php echo $d['jenis_zakat']; ?></td>
				<td align="right" bgcolor="#FFFF99"><?php echo $d['nominal']; ?></td>
                <td align="center" bgcolor="#FFFF99"><?php echo $d['nama']; ?></td>
				<td align="center" bgcolor="#FFFF99"><?php echo $d['no_tlp']; ?></td>
				<td align="center" bgcolor="#FFFF99"><?php echo $d['email']; ?></td>
                <td align="center" bgcolor="#FFFF99"><?php echo $d['bank']; ?></td>
				<td align="center" bgcolor="#FFFF99"><?php echo $d['no_rek']; ?></td>
				
			  <td align="center" bgcolor="#FFFF99">
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>