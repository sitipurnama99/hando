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

  <title>Halaman Login</title>
</head>

<body>

  <div class="container mt-5">
    <div class="row justify-content-center ">
      <div class="col-md-6">
        <div class="card border-danger mb-3">

          <div class="card-header text-center text-danger font-weight-bold">Login</div>

          <div class="card-body text-danger">
            <form action="config/login.php" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <p class="text-center">Tidak punya akun ? <a href="halaman_register.php">Register</a></p>
              <button type="submit" name="login" class="btn btn-outline-danger">Login</button>
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
<script language="javascript" src="js/bootstrap.bundle.min.js"></script>

</html>