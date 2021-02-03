<?php
require_once 'koneksi.php';
$id = $_SESSION['id'];
try {
    $getBiodata = $koneksi->prepare("SELECT * FROM `biodata` WHERE `user_id` = ?");
    $getBiodata->execute([$id]);
    $getUser = $koneksi->prepare("SELECT * FROM `user` WHERE `user_id` = ?");
    $getUser->execute([$id]);
} catch (PDOException $e) {
    die($e->getMessage());
}
