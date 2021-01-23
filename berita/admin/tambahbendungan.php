<!DOCTYPE html>
<html>
<head>Tambah Menu
<?php include 'style.php'; ?>

</head>
<body>
<!--		<input type="text" name="kategori">  -->
	<h2>
		<a href="index.php"> Tambah Data Bendungan Palsu</h2>
	<br/>
	<a href="indexbendungan.php">KEMBALI</a>
	<br/>
	<br/>
    <h3>TAMBAH DATA BENDUNGAN</h3>
    <!--- di sini adalah tampilan untuk tambah data --->
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>Nama Bendungan</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>kabupaten</td>
				<td><input type="text" name="Kabupaten"></td>
            </tr>
            <tr>			
				<td>kecamatan</td>
				<td><input type="text" name="Kecamatan"></td>
            </tr>
            <tr>			
				<td>Luas</td>
				<td><input type="text" name="Luas"></td>
            </tr>
            <tr>
            	<td>Tanggal Berdiri</td>
            	<td><input type="date" name="Tanggal"></td>
            </tr>
			<tr>
				<td></td>
				<td><button name="save">SIMPAN</button></td>
			</tr>		
		</table>
	</form>
	<?php
	include 'koneksi.php';
if(isset($_POST['save']))
{
	$tanggal_berdiri=date('d-F-Y H:1:s');
	date_default_timezone_set('Asia/Kuala_Lumpur');
	$nama = $_POST['Nama'];
	$kabupaten = $_POST['Kabupaten'];
	$kecamatan = $_POST['Kecamatan'];
	$luas = $_POST['Luas'];
    $koneksi->query("INSERT INTO bendungan
        (nama,kecamatan,kabupaten,luas,tanggal)
        VALUES('$nama','$kecamatan','$kabupaten','$luas','$tanggal_berdiri')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    //echo "<meta http-equiv='refresh' content='1;url=indexbendungan.php?halaman=produk'>";

}
?>
</body>
</html>