<?php
require_once 'koneksi.php';

$id = $_POST['id'];
$nama_brand = $_POST['nama_brand'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$file_name = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];


try {
    $query = $koneksi->prepare("INSERT INTO `mobil` (`mobil_id`, `user_id`, `gambar`, `brand_mobil`, `deskripsi`, `harga`) VALUES (NULL, ?, ?, ?, ?,?)");
    $query->execute([$id, 'images/' . $id . '-' . $file_name, $nama_brand, $deskripsi, $harga]);
    move_uploaded_file($tmp_name, '../images/' . $id . '-' . $file_name);
    header("Location: ../halaman_menu_utama.php");
} catch (PDOException $e) {
    die($e->getMessage());
}
