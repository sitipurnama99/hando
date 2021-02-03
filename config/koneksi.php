<?php
$db_hostname = 'localhost';
$db_username = 'id16074865_handosttb';
$db_password = '|s1Q7BFK+oa(2q<H';
$db_name = 'id16074865_hando';
try {
    $koneksi = new PDO(
        "mysql:host=$db_hostname;dbname=$db_name",
        $db_username,
        $db_password
    );
} catch (PDOException $e) {
    die($e->getMessage());
}
