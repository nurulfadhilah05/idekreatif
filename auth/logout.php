<?php
session_start(); // Memulai sesi
session_unset(); // Menghapus semua data sesi
session_destroy(); // Menghancurkan sesi sepenuhnya
header('Location: login.php'); // Mengarahkan pengguna kehalaman login
exit(); // Menghentikan eksekusi skript+