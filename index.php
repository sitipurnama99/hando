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

   <title>Halaman Utama</title>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand text-danger" href="index.php">Hando</a>
         <ul class="navbar-nav mr-auto ">
            <li class="nav-item ">
               <a class="nav-link text-dark" href="index.php">Home</a>
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
         <div class="d-flex">
            <a href="halaman_login.php" class="btn btn-outline-danger">Login</a>
            <a href="halaman_register.php" class="btn btn-danger ml-4">Register</a>
         </div>
      </div>
   </nav>
   <div class="container my-3">
      <div class="jumbotron text-center p-4" style="background-color: beige;">
         <img src="images/jumbotron.jpg" alt="Hando" class="rounded ">
      </div>
   </div>
   <div class="container">
      <div class="row ">
         <div class="col-md-12 d-flex flex-column align-items-center">
            <h1>DP RINGAN & PROSES MUDAH</h1>
            <p>Kami siap melayani Anda memberikan kenyamanan serta kepuasan customer. memberikan penawaran terbaik mobil
               honda Anda</p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="card-group">
               <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="images/car (1).jpg" alt="Car">
                  <div class="card-body">
                     <h5 class="card-title">Hando</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                     <h6>Rp. 800.000.000,-</h6>
                     <a href="halaman_detail.php" class="btn btn-danger">Go Detail</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="images/car (2).jpg" alt="Car">
                  <div class="card-body">
                     <h5 class="card-title">Hando</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                     <h6>Rp. 850.000.000,-</h6>

                     <a href="halaman_detail.php" class="btn btn-danger">Go Detail</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="images/car (3).jpg" alt="Car">
                  <div class="card-body">
                     <h5 class="card-title">Hando</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                     <h6>Rp. 700.000.000,-</h6>

                     <a href="halaman_detail.php" class="btn btn-danger">Go Detail</a>
                  </div>
               </div>
               <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="images/car (4).jpg" alt="Car">
                  <div class="card-body">
                     <h5 class="card-title">Hando</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                     <h6>Rp. 900.000.000,-</h6>
                     <a href="halaman_detail.php" class="btn btn-danger">Go Detail</a>
                  </div>
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