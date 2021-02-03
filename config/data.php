<?php
require_once 'koneksi.php';


try {
    $getAllMobil = $koneksi->prepare("SELECT * FROM `mobil`");
    $getAllMobil->execute();
} catch (PDOException $e) {
    die($e->getMessage());
}
