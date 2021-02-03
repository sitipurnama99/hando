<?php
include 'session.php';
include 'config/biodata.php';
foreach ($getBiodata as $biodata) {
  $idBiodata = $biodata['biodata_id'];
  $namaBiodata = $biodata['nama'];
  $alamatBiodata = $biodata['alamat'];
  $kotaBiodata = $biodata['kota_lahir'];
  $imageBiodata = $biodata['image'];
}
foreach ($getUser as $user) {
  $idUser = $user['user_id'];
  $usernameBiodata = $user['username'];
  $emailBiodata = $user['email'];
  $passwordBiodata = $user['password'];
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

  <title>Halaman Menu Utama</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-danger" href="halaman_menu_utama.php">Hando</a>
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item ">
          <a class="nav-link text-dark" href="halaman_menu_utama.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Daftar Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="#">Pemesanan Online</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="#">Test Drive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="#">Booking Service</a>
        </li>
      </ul>
      <a href="config/logout.php" class="btn btn-outline-danger">Logout</a>
      <?php if ($imageBiodata != null || $imageBiodata != '') : ?>
        <img src="<?php echo $imageBiodata ?>" class="rounded-circle ml-5" alt="<?php echo $usernameBiodata ?>" width="40" height="40">
        <p class="font-weight-bold"><?php echo $usernameBiodata ?></p>
      <?php else : ?>
        <img src="images/car (1).jpg" class="rounded-circle ml-5" alt="<?php echo $usernameBiodata ?>" width="40" height="40">
        <p class="font-weight-bold"><?php echo $usernameBiodata ?></p>
      <?php endif; ?>
    </div>
  </nav>
  <div class="d-flex justify-content-center my-5">
    <div class="col-md-6 card text-danger p-3">
      <form action="config/edit_biodata.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required value="<?php echo $namaBiodata ?>">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required value="<?php echo $alamatBiodata ?>">
        </div>
        <div class="form-group">
          <label for="kota_lahir">Kota Lahir</label>
          <input type="text" class="form-control" id="kota_lahir" placeholder="Kota Lahir" name="kota_lahir" required value="<?php echo $kotaBiodata ?>">
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Username" name="username" required value="<?php echo $usernameBiodata ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required value="<?php echo $emailBiodata ?>">
        </div>
        <div class="form-group">
          <label for="old_password">Password Lama</label>
          <input type="password" class="form-control" id="old_password" name="old_password" placeholder="*******">
        </div>
        <div class="form-group">
          <label for="new_password">Password Baru</label>
          <input type="password" class="form-control" id="new_password" name="new_password" placeholder="*******">
        </div>

        <div class="form-group">
          <label for="foto">Foto Profile</label>
          <input type="file" class="form-control" id="foto" name="foto">
        </div>

        <input type="hidden" name="password" value="<?php echo $passwordBiodata ?>">
        <input type="hidden" name="image_biodata" value="<?php echo $imageBiodata ?>">
        <input type="hidden" name="id_user_biodata" value="<?php echo $idUser ?>">
        <input type="hidden" name="id_biodata" value="<?php echo $idBiodata ?>">
        <button type="submit" name="edit_biodata" class="btn btn-outline-danger">Edit Biodata</button>
      </form>
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