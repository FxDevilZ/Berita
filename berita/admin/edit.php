<?php
include 'koneksi.php';
$id = $_GET['id'];
$ambil=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id'");
$data=mysqli_fetch_assoc($ambil);
?>
<form method="post" enctype="multipart/form-data">
<table align="center">
        	<tr>
            	<td>Judul</td>
                <td>:</td>
                <td><input type="text" name="judul"  size="40" value="<?php echo $data['judul']; ?>" /></td>
            </tr>
            <tr>
            	<td>Kategori</td>
                <td>:</td>
                <td><input type="text" name="kategori"value="<?php echo $data['kategori']; ?>" /> </td>
            </tr>
            <tr>
            	<td>Isi Berita</td>
                <td>:</td>
                <td><textarea name="isi_berita" cols="70" rows="20" value="<?php echo $data['isi_berita']; ?>"><?php echo $data['isi_berita']; ?></textarea></td>
            </tr>
            <tr>
            	<td>Gambar</td>
                <td>:</td>
                <td>
                <input type="file" name="foto"></td>
            </tr>
            <tr>
            	<td>
                <input type="submit" name="save" value="save">
                </td>
            </tr>
        </table>
</form>
<?php 
include 'koneksi.php';
    if(isset($_POST['save']))
    {
        $namafoto=$_FILES['foto']['name'];
        $lokasi=$_FILES['foto']['tmp_name'];
        //jika fotonya dirubah
        if(!empty($lokasi))
        {
            move_uploaded_file($lokasi, "../admin/foto/$namafoto");
            $koneksi->query("UPDATE berita SET judul='$_POST[judul]',
                kategori='$_POST[kategori]', isi_berita='$_POST[isi_berita]', 
                gambar='$namafoto'
                WHERE id_berita='$_GET[id]' ");
        }
        else
        {
            $koneksi->query("UPDATE berita SET judul='$_POST[judul]',
                kategori='$_POST[kategori]', isi_berita='$_POST[isi_berita]' 
                WHERE id_berita='$_GET[id]' ");
        }
        echo "<script>alert('data produk telah diubah');</script>";
        echo "<script>location='index.php';</script>";
    }
?>