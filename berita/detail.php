<?php session_start(); ?>
<?php include 'koneksi.php'; ?>

<html>
<?php 
//mendapat id produk
$id = $_GET['id'];

//ambil data
$data = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id' ");
$no=1;
while ($row = mysqli_fetch_assoc($data)) {
?>
    <body>
    <?php include 'style.php'; ?><br>
    <center><a class="button" href="index.php">KEMBALI</a>
    <br>
    <br><br>
<table class="table" border="1">
<tr><th>NO</th><th>JUDUL</th><th>isi berita</th><th>kategori</th><th>tgl input</th>
    <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['judul']; ?></td>
            <td><?php echo $row['isi_berita']; ?></td>
            <td><?php echo $row['kategori']; ?></td>
            <td><?php echo $row['tgl_input']; ?></td>
    </tr>
</table>
<?php } ?>
</body>
    </html>

