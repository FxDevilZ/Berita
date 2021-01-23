<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">    
</head>
<body>
<form role="form" method="post"> 
    <div class="sidenav">
         <div class="login-main-text">
            <h2>Admin<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" name="login" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary">Register</button>
               </form>
            </div>
         </div>
      </div>
</form>
        <?php
        
        if (isset($_POST['login'])) {
         $email      = $_POST["email"];
         $password   = $_POST['password'];
            $ambil      = $koneksi->query("SELECT * FROM pelanggan WHERE email='$email' AND password_pelanggan='$password'");
            $akun = $ambil->num_rows;
            if ($akun == 1) {
               $akun = $ambil->fetch_assoc();
               $_SESSION["pelanggan"] = $akun;
                echo "Login Sukses";
                echo "<meta http-equiv='refresh' content='1;url=index.php'>";
            } else {
                echo "Login Gagal";
                echo "<meta http-equiv='refresh' content='1;url=login_user.php'>";
            }
        }
        ?>
    </body>
</html>