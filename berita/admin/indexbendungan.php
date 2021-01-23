<!DOCTYPE html>
<html>
<head><?php include 'style.php' ?>
	<title>Master Bendungan</title>
</head>
<body>
	<?php include 'koneksi.php'?>

<div class="container">
  <h1><center> <a href="index.php" class="mydiv">Master Bendungan</a></h1>
  <a href="tambahbendungan.php" class="button"> + TAMBAH DATA BENDUNGAN </a> <br> <br>                                                                  
  <div class="table-responsive">          
  <table class="table" border="1">
    <thead>
        <tr>
            <th>No</th><th>Nama Bendungan</th><th>Kecamatan</th>
            <th>Kabupaten</th><th>Luas</th><th>Tanggal Berdiri</th>
            <th colspan="3"><center>action</th>
        </tr>
        <?php
    include 'koneksi.php';
    $halaman = 5;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($koneksi, "SELECT * FROM bendungan");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman);            
    $query = mysqli_query($koneksi, "select * from bendungan LIMIT $mulai, $halaman")or die(mysqli_error);
    $no =$mulai+1;
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['kecamatan']; ?></td>
            <td><?php echo $data['kabupaten']; ?></td>
            <td><?php echo $data['luas']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <div class="w3-clear nextprev">
            <td>
                <a href="hapusbendungan.php?id=<?php echo $data["kd_bendungan"];?>" class="button" >Hapus</a>
            </td>
            <td>
              <a href="editbendungan.php?id=<?php echo $data ["kd_bendungan"]; ?>" class="button" >Edit</a>
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