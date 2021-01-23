<!Doctype html>
<html>

<head>
<?php include 'style.php' ?>
<style>
html
/*body {
  height: 100%;
}
.mydiv {
  width:100%;
  height:100%;
  color:black;
  font-weight:bold;
  animation: myanimation 1s infinite;
}

@keyframes myanimation {
  0% {background-color:red;}
  15%{background-color:yellow;}
  40%{background-color:green;}
  70%{background-color:brown;}
  80%{background-color:violet;}
  100% {background-color:red;}
} */
</style>
</head>

<body>

<div class="container">
  <h1><center> <a href="index.php" class="mydiv">Halo Admin</a></h1>
  <h3><center>Silahkan buat/edit berita hoax di sini</h3>
  <br>
  <a href="tambah.php" class="button"> + TAMBAH BERITA </a>
  <a href="indexbendungan.php" class="button">Master Bendungan</a><br><br>                                                                                      
  <div class="table-responsive">          
  <table class="table" border="1">
    <thead>
        <tr>
            <th>No</th><th>judul</th><th>kategori</th>
            <th>isi berita</th><th>tanggal input</th><th>gambar</th>
            <th colspan="3"><center>action</th>
        </tr>
        <?php
    include 'koneksi.php';
    $halaman = 5;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($koneksi, "SELECT * FROM berita");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman);            
    $query = mysqli_query($koneksi, "select * from berita LIMIT $mulai, $halaman")or die(mysqli_error);
    $no =$mulai+1;
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><?php echo $data['isi_berita']; ?></td>
            <td><?php echo $data['tgl_input']; ?></td>
            <td><img src="../admin/foto/<?php echo $data['gambar']; ?>" width="100"/></td>
            <div class="w3-clear nextprev">
            <td>
                <a href="hapus.php?id=<?php echo $data["id_berita"];?>" class="button" >Hapus</a>
            </td>
            <td>
              <a href="edit.php?id=<?php echo $data ["id_berita"]; ?>" class="button" >Edit</a>
            </td>
            <td>
              <a href="detail.php?id=<?php echo $data["id_berita"];?>" class="button" >Detail</a>
            </td>
            
    </div>

        </tr>

        <?php               
  } 
  ?>
  <div class="w3-main" style="margin-left:250px">

</tbody>
  </table>
  </div>
</div>
  <center>
    <div class="pagination">
      <div class="w3-center w3-padding-32">
        <div class="w3-bar">
        <?php for ($i=1; $i<=$pages ; $i++){ ?>
        <a class="w3-button w3-hover-black" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

        <?php } ?>
        </div>
      </div>

    </div>

</body>

</html>

<!-- function untuk viewimage -->
<?php 
if(isset($_GET['gambar'])) 
{
    $query = mysqli_query($koneksi,"select * from berita where gambar='".$_GET['gambar']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["gambar"]);
    echo $row["gambar"];
}
?>
