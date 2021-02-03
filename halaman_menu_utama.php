<?php
include 'session.php';
include 'config/data.php';
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
$id = $_SESSION['id'];
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
  <div class="container my-3">
    <div class="jumbotron text-center p-4" style="background-color: beige;">
      <img src="images/jumbotron (2).jpg" alt="Hando" class="rounded ">
    </div>
  </div>
  <div class="container">
    <div class="row ">
      <div class="col-md-12 d-flex flex-column align-items-center">
        <h1>DP RINGAN & PROSES MUDAH</h1>
        <p>Kami siap melayani Anda memberikan kenyamanan serta kepuasan customer. memberikan penawaran terbaik
          mobil
          honda Anda</p>
      </div>
    </div>
    <!-- 1 ROW -->
    <div class="row">
      <div class="col-md-6 card text-danger p-3 d-none" id="form_add">
        <form action="config/tambah_mobil.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama_brand">Nama Brand Mobil</label>
            <input type="text" class="form-control" id="nama_brand" placeholder="Nama Brand Mobil" name="nama_brand" required>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" required>
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" placeholder="$1000" name="harga" required>
          </div>
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
          </div>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <button type="submit" name="tambah" class="btn btn-outline-danger">Tambah Mobil</button>
        </form>
      </div>
      <div class="col-md-6 mb-5">
        <button class="btn btn-danger float-right font-weight-bold" id="btn_show" onclick="showFormAdd()">+</button>
      </div>
    </div>

    <?php if ($getAllMobil->rowCount() > 0) : ?>
      <?php foreach ($getAllMobil as $mobil) : ?>
        <?php
        $nama_brand = $mobil['brand_mobil'];
        $deskripsi = $mobil['deskripsi'];
        $harga = $mobil['harga'];
        $gambar = $mobil['gambar'];
        $mobil_id = $mobil['mobil_id'];
        $id_user_from_mobil = $mobil['user_id'];
        ?>
        <!-- ROW -->
        <div class="row">
          <div class="col-md-12">
            <div class="card my-2 d-flex flex-row">
              <img class="card-img-top" src="<?php echo $gambar; ?>" alt="Car" style="width: 25rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $nama_brand; ?></h5>
                <p class="card-text"><?php echo $deskripsi; ?></p>
                <h6>Rp. <?php echo $harga; ?>,-</h6>
                <?php if ($id == $id_user_from_mobil) : ?>
                  <div class="d-flex">
                    <form action="edit_mobil.php" method="POST" enctype="multipart/form-data" class="mr-5">
                      <input type="hidden" name="id_user" value="<?php echo $id ?>">
                      <input type="hidden" name="id_mobil" value="<?php echo $mobil_id ?>">
                      <input type="hidden" name="nama_brand_mobil" value="<?php echo $nama_brand ?>">
                      <input type="hidden" name="deskripsi_mobil" value="<?php echo $deskripsi ?>">
                      <input type="hidden" name="harga_mobil" value="<?php echo $harga ?>">
                      <input type="hidden" name="gambar_mobil" value="<?php echo $gambar ?>">
                      <input type="hidden" name="usernameBiodata" value="<?php echo $usernameBiodata ?>">
                      <input type="hidden" name="imageBiodata" value="<?php echo $imageBiodata ?>">
                      <button type="submit" name="edit_mobil" class="btn btn-warning">Edit Mobil</button>
                    </form>
                    <form action="config/hapus_mobil.php" method="POST" class="mx-5">
                      <input type="hidden" name="gambar_mobil" value="<?php echo $gambar ?>">
                      <input type="hidden" name="id_mobil" value="<?php echo $mobil_id ?>">
                      <button type="submit" name="hapus_mobil" class="btn btn-danger">Hapus Mobil</button>
                    </form>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- END ROW -->
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <div class="row">
    <div class="col-md-12 text-center bg-danger">
      <p class="font-weight-bold text-white my-2">@Copyright by 18111158_Siti Purnamasari_TIFRP18CIDB_UASWEB1</p>
    </div>
  </div>




</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
  function showFormAdd() {
    var form = document.getElementById('form_add');
    var btn = document.getElementById('btn_show');
    form.classList.toggle('d-none');
    btn.classList.toggle('float-right');
    if (btn.innerHTML == '+') {
      btn.innerHTML = '-'
    } else {
      btn.innerHTML = '+'
    }
  }
</script>

</html>