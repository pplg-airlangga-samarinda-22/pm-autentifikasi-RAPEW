<?php
    session_start();
    require_once "../koneksi.php";
    if (empty($_SESSION['username'])) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pelaporan Pengaduan</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Pengaduan Masyarakat (ADMIN) </h1>
    <nav>
        <a href="index.php">Dashboard</a>
        <a href="tambah-petugas.php">Tambah Petugas</a>
        <a href="verifikasi.php">Verifikasi</a>
        <a href="tanggapan.php">Tanggapan</a>
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>