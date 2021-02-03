<?php
require_once 'koneksi.php';
$id_user = $_POST['id_user'];
$id_mobil = $_POST['id_mobil'];
$nama_brand_mobil = $_POST['nama_brand_mobil'];
$deskripsi_mobil = $_POST['deskripsi_mobil'];
$gambar_mobil_lama = $_POST['gambar_mobil_lama'];
$harga_mobil = $_POST['harga_mobil'];
$nameGambar_mobil = $_FILES['gambar_mobil']['name'];
$tmpGambar_mobil = $_FILES['gambar_mobil']['tmp_name'];


try {
    if ($nameGambar_mobil != '') {
        $queryUpdate = $koneksi->prepare("UPDATE `mobil` SET `gambar`=?,`brand_mobil`=?,`deskripsi`=?,`harga`=? 
        WHERE `mobil_id` = ? AND `user_id` = ?");
        $queryUpdate->execute(['images/' . $id_user . '-' . $nameGambar_mobil, $nama_brand_mobil, $deskripsi_mobil, $harga_mobil, $id_mobil, $id_user]);
        unlink('../' . $gambar_mobil_lama);
        move_uploaded_file($tmpGambar_mobil, '../images/' . $id_user . '-' . $nameGambar_mobil);
        echo "<script>
        alert('Sukses Edit');
        window.location.replace('../halaman_menu_utama.php');
        </script>";
    } else {
        $queryUpdate = $koneksi->prepare("UPDATE `mobil` SET `brand_mobil`=?,`deskripsi`=?,`harga`=? 
        WHERE `mobil_id` = ? AND `user_id` = ?");
        $queryUpdate->execute([$nama_brand_mobil, $deskripsi_mobil, $harga_mobil, $id_mobil, $id_user]);
        echo "<script>
        alert('Sukses Edit');
        window.location.replace('../halaman_menu_utama.php');
        </script>";
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
