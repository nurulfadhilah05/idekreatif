<?php

// Konfigurasi koneksi database
$host = "localhost"; // Nama host server database
$username = "root"; // Username untuk akses ke database
$password = "idekreatif"; // Nama database yang digunakan

// Membuat koneksi ke databse menggunakan MySQLi
$conn = mysqli_connect($host, $username, $password, $database);

// Mengecek apakah koneksi berhasil 
if ($conn->connect_eror) {
    // Menampilkan pesan eror jika gagal
    die("Database gagal terkoneksi: " . $conn->connect_eror);
}

//Jika koneksi berhasil, script akan terus berjalan tanpa pesan eror
?>

