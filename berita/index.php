<!DOCTYPE html>
<html>
<head profile="http://gmpg.org/xfn/11">
	<title>mantap</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link rel="stylesheet" href="styles/layout.css" type="text/css" />
    <link rel="stylesheet" href="artikel.css" type="text/css"/>
    <script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
    <script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
    <style>
    
</style>
</head>
<body id="top">
<?php include 'style.php'; ?>

<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.php"><strong>B</strong>eranda<strong> D</strong>unia</a></h1>
      <p>Berita-berita terupdate paling hoax dari seluruh dunia</p>
    </div>
    <br class="clear" />
  </div>
</div>
    <br>
    <?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi, "select * from berita");
        while($data = mysqli_fetch_array($query)){
        ?>
        <div class="grid-container">
            <div class="foto" enctype="multipart/form-data">
                <?php echo "<img src='admin/foto/$data[gambar]' width='100' />";?>
            </div>
            <div class="judul">
                <div class="tanggal">
                    <?php echo $data['tgl_input']; ?>
                </div>
                <div class="area-judul">
                <a href="detail.php?id=<?php echo $data["id_berita"];?>"><?php echo $data['judul']; ?> </a>
                </div>
            </div>
        </div>


    <?php
    }
    ?>
    
    <?php  
    if(isset($_GET['gambar'])) 
     {
         $query = mysqli_query($koneksi,"select * from berita where gambar='".$_GET['gambar']."'");
         $row = mysqli_fetch_array($query);
         header("Content-type: " . $row["gambar"]);
         echo $row["gambar"];
     }
     ?>
    <!--- ini fungsi halaman agar semua php dapat dibuka di 1 halaman yang sama -->
     <?php 
                if(isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="produk")
                    {
                        include 'produk.php';
                    }
                    elseif($_GET['halaman']=="pembelian")
                    {
                        include 'pembelian.php';
                    }
                    elseif($_GET['halaman']=="pelanggan")
                    {
                        include 'pelanggan.php';
                    }
                    elseif($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif($_GET['halaman']=="tambahproduk")
                    {
                        include 'tambahproduk.php';
                    }
                    elseif($_GET['halaman']=="hapusproduk")
                    {
                        include 'hapusproduk.php';
                    }
                    elseif($_GET['halaman']=="ubahproduk")
                    {
                        include 'ubahproduk.php';
                    }
                    elseif($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                    elseif($_GET["halaman"]=="pembayaran")
                    {
                        include 'pembayaran.php';
                    }
                    elseif($_GET["halaman"]=="laporan_pembelian")
                    {
                        include 'laporan_pembelian.php';
                    }   
                }
                
                ?>
    </body>
</html>