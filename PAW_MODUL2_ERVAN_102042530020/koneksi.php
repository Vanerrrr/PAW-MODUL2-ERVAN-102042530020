<?php
    $host = "localhost";
    $user = "root";
    $password = "Fahmi.26.02";
    $database = "paw_modul2_showroom";

$conn = mysqli_connect('127.0.0.1', 'root', 'Fahmi.26.02', 'paw_modul2_showroom');
mysqli_set_charset($conn, 'utf8mb4');

if ($conn) {
    echo 'Koneksi berhasil.';
} else {
    echo 'Koneksi gagal.';
}
?>