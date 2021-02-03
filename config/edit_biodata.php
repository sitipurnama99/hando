<?php
require_once 'koneksi.php';
$id_user_biodata = $_POST['id_user_biodata'];
$id_biodata = $_POST['id_biodata'];
$image_biodata = $_POST['image_biodata'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota_lahir = $_POST['kota_lahir'];
$username = $_POST['username'];
$email = $_POST['email'];
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$password = $_POST['password'];
$namaBiodataGambar = $_FILES['foto']['name'];
$tmpBiodataGambar = $_FILES['foto']['tmp_name'];


// echo $old_password . '<br>';
// echo $new_password . '<br>';
// echo $password . '<br>';
try {
  if ($namaBiodataGambar != '') {
    $image = $koneksi->prepare("SELECT `image` FROM `biodata` WHERE `user_id` = ?");
    $image->execute([$id_user_biodata]);

    foreach ($image as $i) {
      $gambar = $i['image'];
    }
    if ($gambar != '' || $gambar != null) {
      unlink('../' . $image_biodata);
    }
    if (isset($_POST['new_password']) && isset($_POST['old_password'])) {
      if ($new_password != '' || $new_password != null) {
        if (sha1($old_password) == $password) {
          $queryBiodata = $koneksi->prepare("UPDATE `user` SET  `username` = ?, `email` =?, `password` = SHA1(?) WHERE `user`.`user_id` = ?;
                UPDATE `biodata` SET `nama` = ?, `alamat` = ?, `kota_lahir` = ?, `image` = ? WHERE `biodata`.`biodata_id` = ?;");
          $queryBiodata->execute([$username, $email, $new_password, $id_user_biodata, $nama, $alamat, $kota_lahir, 'images/' . $id_user_biodata . '-' . $namaBiodataGambar, $id_biodata]);
          move_uploaded_file($tmpBiodataGambar, '../images/' . $id_user_biodata . '-' . $namaBiodataGambar);
          echo "<script>
                  alert('Sukses Edit Biodata');
                  window.location.replace('../halaman_menu_utama.php');
                  </script>";
        } else {
          echo "<script>
                alert('Gagal Edit Biodata. Password salah');
                window.location.replace('../biodata.php');
                </script>";
        }
      } else {
        $queryBiodata = $koneksi->prepare("UPDATE `user` SET  `username` = ?, `email` =? WHERE `user`.`user_id` = ?;
            UPDATE `biodata` SET `nama` = ?, `alamat` = ?, `kota_lahir` = ?, `image` = ? WHERE `biodata`.`biodata_id` = ?;");
        $queryBiodata->execute([$username, $email, $id_user_biodata, $nama, $alamat, $kota_lahir, 'images/' . $id_user_biodata . '-' . $namaBiodataGambar, $id_biodata]);
        move_uploaded_file($tmpBiodataGambar, '../images/' . $id_user_biodata . '-' . $namaBiodataGambar);
        echo "<script>
              alert('Sukses Edit Biodata');
              window.location.replace('../halaman_menu_utama.php');
              </script>";
      }
    } else {
      $queryBiodata = $koneksi->prepare("UPDATE `user` SET  `username` = ?, `email` =? WHERE `user`.`user_id` = ?;
            UPDATE `biodata` SET `nama` = ?, `alamat` = ?, `kota_lahir` = ?, `image` = ? WHERE `biodata`.`biodata_id` = ?;");
      $queryBiodata->execute([$username, $email, $id_user_biodata, $nama, $alamat, $kota_lahir, 'images/' . $id_user_biodata . '-' . $namaBiodataGambar, $id_biodata]);
      move_uploaded_file($tmpBiodataGambar, '../images/' . $id_user_biodata . '-' . $namaBiodataGambar);
      echo "<script>
              alert('Sukses Edit Biodata');
              window.location.replace('../halaman_menu_utama.php');
              </script>";
    }
  } else {

    $queryBiodata = $koneksi->prepare("UPDATE `user` SET  `username` = ?, `email` =?, `password` = SHA1(?) WHERE `user`.`user_id` = ?;
      UPDATE `biodata` SET `nama` = ?, `alamat` = ?, `kota_lahir` = ? WHERE `biodata`.`biodata_id` = ?;");
    $queryBiodata->execute([$username, $email, $new_password, $id_user_biodata, $nama, $alamat, $kota_lahir, $id_biodata]);

    if (isset($_POST['new_password']) && isset($_POST['old_password'])) {
      if ($new_password != '' || $new_password != null) {
        if (sha1($old_password) == $password) {
          $queryBiodata = $koneksi->prepare("UPDATE `user` SET  `username` = ?, `email` =?, `password` = SHA1(?) WHERE `user`.`user_id` = ?;
                    UPDATE `biodata` SET `nama` = ?, `alamat` = ?, `kota_lahir` = ? WHERE `biodata`.`biodata_id` = ?;");
          $queryBiodata->execute([$username, $email, $new_password, $id_user_biodata, $nama, $alamat, $kota_lahir, $id_biodata]);
          echo "<script>
                      alert('Sukses Edit Biodata');
                      window.location.replace('../halaman_menu_utama.php');
                      </script>";
        } else {
          echo "<script>
                    alert('Gagal Edit Biodata. Password salah');
                    window.location.replace('../biodata.php');
                    </script>";
        }
      } else {
        $queryBiodata = $koneksi->prepare("UPDATE `user` SET  `username` = ?, `email` =? WHERE `user`.`user_id` = ?;
        UPDATE `biodata` SET `nama` = ?, `alamat` = ?, `kota_lahir` = ? WHERE `biodata`.`biodata_id` = ?;");
        $queryBiodata->execute([$username, $email, $id_user_biodata, $nama, $alamat, $kota_lahir, $id_biodata]);
        echo "<script>
        alert('Sukses Edit Biodata');
        window.location.replace('../halaman_menu_utama.php');
        </script>";
      }
    } else {
      $queryBiodata = $koneksi->prepare("UPDATE `user` SET  `username` = ?, `email` =? WHERE `user`.`user_id` = ?;
      UPDATE `biodata` SET `nama` = ?, `alamat` = ?, `kota_lahir` = ? WHERE `biodata`.`biodata_id` = ?;");
      $queryBiodata->execute([$username, $email, $id_user_biodata, $nama, $alamat, $kota_lahir, $id_biodata]);
      echo "<script>
      alert('Sukses Edit Biodata');
      window.location.replace('../halaman_menu_utama.php');
      </script>";
    }
  }
} catch (PDOException $e) {
  die($e->getMessage());
}
