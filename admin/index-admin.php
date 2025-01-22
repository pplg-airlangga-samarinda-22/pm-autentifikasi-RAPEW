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
    <title>Admin Pengaduan</title>
</head>
<body>
    <h1>Selamat Datang di sistem pengaduan masyarakat </h1>
    <nav>
        <a href="index-admin.php">Dashboard</a>
        <a href="../pengaduan/pengaduan.php">Pengaduan</a>
        <a href="../masyarakat/masyarakat.php">Masyarakat</a>
        
        <?php if ($_SESSION['level'] === 'admin') { ?>
            <a href="../petugas/petugas.php">Petugas</a>
        <?php } ?>

        <a href="../laporan.php">laporan</a>
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>