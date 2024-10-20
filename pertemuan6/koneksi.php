<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pegawai";

// Aktifin mode exception untuk mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Buat koneksi ke database
    $koneksi = mysqli_connect($servername, $username, $password, $dbname);
    // Jika berhasil
    // echo "Koneksi berhasil";
} catch (mysqli_sql_exception $e) {
    // Jika terjadi kesalahan koneksi
    echo "Koneksi Gagal: " . $e->getMessage();
}