<?php
if (!isset($_POST['edit_mobil'])) {
  header("Location: halaman_menu_utama.php");
}
$id_user = $_POST['id_user'];
$id_mobil = $_POST['id_mobil'];
$nama_brand_mobil = $_POST['nama_brand_mobil'];
$deskripsi_mobil = $_POST['deskripsi_mobil'];
$harga_mobil = $_POST['harga_mobil'];
$gambar_mobil_lama = $_POST['gambar_mobil'];
$usernameBiodata = $_POST['usernameBiodata'];
$imageBiodata = $_POST['imageBiodata'];
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Halaman Edit Mobil</title>
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
        <a href="biodata.php">
          <img src="<?php echo $imageBiodata ?>" class="rounded-circle ml-5" alt="<?php echo $usernameBiodata ?>" width="40" height="40">
        </a>
        <p class="font-weight-bold"><?php echo $usernameBiodata ?></p>
      <?php else : ?>
        <a href="biodata.php">
          <img src="images/car (1).jpg" class="rounded-circle ml-5" alt="<?php echo $usernameBiodata ?>" width="40" height="40">
        </a>
        <p class="font-weight-bold"><?php echo $usernameBiodata ?></p>
      <?php endif; ?>
    </div>
  </nav>
  <div class="d-flex justify-content-center my-5">
    <div class="col-md-6 card text-danger p-3">
      <form action="config/edit_mobil.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama_brand_mobil">Nama Brand Mobil</label>
          <input type="text" class="form-control" id="nama_brand_mobil" placeholder="Nama Brand Mobil" name="nama_brand_mobil" required value="<?php echo $nama_brand_mobil ?>">
        </div>
        <div class="form-group">
          <label for="deskripsi_mobil">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi_mobil" placeholder="Deskripsi" name="deskripsi_mobil" required value="<?php echo $deskripsi_mobil ?>">
        </div>
        <div class="form-group">
          <label for="harga_mobil">Harga</label>
          <input type="number" class="form-control" id="harga_mobil" placeholder="$1000" name="harga_mobil" required value="<?php echo $harga_mobil ?>">
        </div>
        <div class="form-group">
          <label for="gambar_mobil">Gambar</label>
          <input type="file" class="form-control" id="gambar_mobil" name="gambar_mobil">
        </div>
        <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
        <input type="hidden" name="id_mobil" value="<?php echo $id_mobil ?>">
        <input type="hidden" name="gambar_mobil_lama" value="<?php echo $gambar_mobil_lama ?>">
        <button type="submit" name="edit" class="btn btn-outline-danger">Tambah Mobil</button>
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