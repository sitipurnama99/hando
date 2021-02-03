<?php
session_start();
if (isset($_SESSION['id'])) {
  header('Location:halaman_menu_utama.php');
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Halaman Register</title>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center ">
      <div class="col-md-6">
        <div class="card border-danger mb-3">
          <div class="card-header text-center text-danger font-weight-bold">Register</div>
          <div class="card-body text-danger">
            <form action="config/register.php" method="POST">
              <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required>
              </div>
              <div class="form-group">
                <label for="kota_lahir">Kota Lahir</label>
                <input type="text" class="form-control" id="kota_lahir" placeholder="Kota Lahir" name="kota_lahir" required>
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
              </div>
              <p class="text-center">Punya akun ? <a href="halaman_login.php">Login</a></p>
              <button type="submit" name="register" class="btn btn-outline-danger">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center bg-danger">
      <p class="font-weight-bold text-white my-2">@Copyright by 18111158_Siti Purnamasari_TIFRP18CIDB_UASWEB1</p>
    </div>
  </div>

</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>