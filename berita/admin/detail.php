<?php session_start(); ?>
<?php include 'koneksi.php'; ?>

<html>
<?php 
//mendapat id produk
$id = $_GET['id'];

//ambil data
$ambil = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id' ");
$no=1;
while ($row = mysqli_fetch_assoc($ambil)) {
?>
    <body>
    <?php include 'style.php'; ?>
    <center><a class="button" href="index.php">KEMBALI</a>
    <br>
    <br><br>
<table class="table" border="1">
<tr><th>NO</th><th>JUDUL</th><th>pengarang</th><th>tahun terbit</th><th>penerbit</th><th>sinopsis</th>
    <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['judul']; ?></td>
            <td><?php echo $row['kategori']; ?></td>
            <td><?php echo $row['tgl_input']; ?></td>
            <td><?php echo $row['isi_berita']; ?></td>
            <td><img src="../admin/foto/<?php echo $row['gambar']; ?>" width="100"/></td>
    </tr>
</table>

<?php } ?>

<?php 
if(isset($_GET['gambar'])) 
{
    $query = mysqli_query($koneksi,"select * from berita where gambar='".$_GET['gambar']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["gambar"]);
    echo $row["gambar"];
}
?>
</body>
</html>

