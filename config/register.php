<?php
require_once 'koneksi.php';
$nama = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$kota_lahir = $_POST['kota_lahir'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if (isset($_POST['register'])) {
    try {
        $query = $koneksi->prepare("INSERT INTO `user` (`user_id`, `username`, `email`, `password`) VALUES (NULL, ?, ?, SHA1(?));
   INSERT INTO `biodata` (`biodata_id`, `user_id`, `nama`, `alamat`, `kota_lahir`) VALUES (NULL, LAST_INSERT_ID(), ?, ?, ?);");
        $query->execute([$username, $email, $password, $nama, $alamat, $kota_lahir]);
        echo "<script>
            alert('Sukses');
            window.location.replace('../halaman_login.php');
            </script>";
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
