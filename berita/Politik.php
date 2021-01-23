<!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link rel="stylesheet" href="styles/layout.css" type="text/css" />
    <link rel="stylesheet" href="artikel.css" type="text/css"/>
    <script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
    <script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
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
        $query = mysqli_query($koneksi, "select * from berita where kategori='Politik'");
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
</body>