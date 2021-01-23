<!DOCTYPE html>
<html>
<head>
    <? php include 'style.php'; ?>
    <title> EDIT DATA BENDUNGAN</title>
</head>
<body>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$ambil=mysqli_query($koneksi, "SELECT * FROM bendungan WHERE kd_bendungan='$id'");
$data=mysqli_fetch_assoc($ambil);
?>
<form method="post" enctype="multipart/form-data">
<table align="center">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"  size="40" value="<?php echo $data['nama']; ?>" /></td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td>:</td>
                <td><input type="text" name="kabupaten"value="<?php echo $data['kabupaten']; ?>" /> </td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td><input type="text" name="kecamatan"value="<?php echo $data['kecamatan']; ?>" /> </td>
            </tr>
            <tr>
                <td>Luas</td>
                <td>:</td>
                <td><input type="text" name="luas"value="<?php echo $data['luas']; ?>" /> </td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="save" value="save">
                </td>
            </tr>
        </table>
</form>
<?php 
    if(isset($_POST['save']))
    {
        $tanggal_berdiri=date('d-F-Y h:1:s');
        $koneksi->query("UPDATE bendungan SET nama='$_POST[nama]',
            kecamatan='$_POST[kecamatan]', kabupaten='$_POST[kabupaten]', 
            luas='$_POST[luas]', tanggal='$tanggal_berdiri'
            WHERE kd_bendungan='$_GET[id]' ");
        echo "<script>alert('data telah diubah');</script>";
        echo "<script>location='indexbendungan.php?halaman=indexbendungan';</script>";
    }
?>

</body>
</html>