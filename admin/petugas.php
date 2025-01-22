<?php
session_start();
require "../koneksi.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Petugas</title>
</head>
<body>
    <h1>Data Petugas</h1>
    <a href="index-petugas.php">kembali</a>
    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Username</th>
            <th>Level</th>
        </thead>
        <tbody>
            <?php
        $no = 0;
        $sql = "SELECT * FROM petugas";
        $rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row){
            ?>
        <tr>
            <td><?= ++$no ?></td>
            <td><?= $row['nama_petugas'] ?></td>
            <td><?= $row['telp'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['level'] ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a href="index-petugas.php">kembali</a>

</body>
</html>