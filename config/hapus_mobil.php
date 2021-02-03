<?php
require_once 'koneksi.php';
$id_mobil = $_POST['id_mobil'];
$gambar_mobil = $_POST['gambar_mobil'];


try {
    $queryDelete = $koneksi->prepare("DELETE FROM `mobil` WHERE `mobil`.`mobil_id` = ?");
    $queryDelete->execute([$id_mobil]);
    unlink('../' . $gambar_mobil);
    echo "<script>
    alert('Sukses Hapus');
    window.location.replace('../halaman_menu_utama.php');
    </script>";
} catch (PDOException $e) {
    die($e->getMessage());
}
