<h2>data pelanggan</h2>
<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>alamat</th>
            <th>Password Pelanggan </th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; 
        include 'koneksi.php';
         $ambil=$koneksi->query("SELECT * FROM pelanggan"); 
         while($pecah=$ambil->fetch_assoc()){ ?>
         <a href="index.php">Home</a>
        <tr>
            <th><?php echo $nomor?></th>
            <th><?php echo $pecah['nama_pelanggan']; ?></th>
            <th><?php echo $pecah['email']; ?></th>
            <th><?php echo $pecah['telpon']; ?></th>
            <th><?php echo $pecah['alamat']; ?></th>
            <th><?php echo $pecah['password_pelanggan']; ?></th>
            <form role="form" method="post">
        </tr>
        <?php $nomor++; ?>
        <?php }?>
    </tbody>
</table>