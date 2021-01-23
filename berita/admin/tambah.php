<!DOCTYPE html>
<html>
<head>Tambah Menu

</head>
<body>
<!--		<input type="text" name="kategori">  -->
	<h2>Tambah Berita hoax</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
    <h3>TAMBAH DATA BERITA</h3>
    <!--- di sini adalah tampilan untuk tambah data --->
	<form method="post" enctype="multipart/form-data">
		
		<table>
			<tr>			
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>isi berita</td>
				<td><textarea name="isi_berita" cols="70" rows="20"></textarea></td>
            </tr>
            <tr>			
				<td>tanggal input</td>
				<td><input type="date" name="tgl_input"></td>
            </tr>
            <tr>			
				<td>gambar</td>
				<td><input type="file" name="foto"></td>
            </tr>

			<tr>
				<td>Kategori</td>
				<td>
				<?php
				include 'koneksi.php';
			$query=mysqli_query($koneksi, "SELECT DISTINCT kategori FROM berita order by id_berita DESC;") or die(mysqli_error());
			?><select name="kategori"><?php
			 while ($data=mysqli_fetch_array($query))
		   {
			?><option value="<?php echo $data?>"><?php echo $data['kategori'] ?></option>
		<?php
 		 }
		?>
		</select>
				</td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="save" value="save"></td>
			</tr>		
		</table>
	</form>
	<?php
	include 'koneksi.php';
if(isset($_POST['save']))
{
    $gambar=$_FILES['foto']['name'];
	$lokasi=$_FILES['foto']['tmp_name'];
	$tanggal_upload=date('d-F-Y H:1:s');
	date_default_timezone_set('Asia/Kuala_Lumpur');
	//$kategori=$_GET['kategori'];
    move_uploaded_file($lokasi,"../admin/foto/".$gambar);
    $koneksi->query("INSERT INTO berita
        (judul,kategori,isi_berita,tgl_input,gambar)
        VALUES('$_POST[judul]','$_POST[kategori]','$_POST[isi_berita]','$tanggal_upload','$gambar')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    // echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";

}
?>
</body>
</html>