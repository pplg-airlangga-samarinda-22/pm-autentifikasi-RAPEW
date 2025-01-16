<?php
require "../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    // fungsi execute_query hanya bisa digunakan pada PHP 8.2
    $sql = "SELECT * FROM petugas WHERE username=? AND password=?";
    $row = $koneksi->execute_query($sql, [$username, $password]);

    if (mysqli_num_rows($row) == 1) {
        $user = mysqli_fetch_assoc($row);
        session_start();
        $_SESSION['username'] = $username;
        if ($user['level'] === 'admin') {
            header("location:index-admin.php");
        } elseif ($user['level'] === 'petugas') {
            header("location:index-petugas.php");
        }
    } else {
        echo "<script>alert('Gagal Login!')</script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <form action="" method="post" class="form-login">
    <h4 class="text-center">LOGIN ADMIN / PETUGAS</h4>
        <p>Silahkan Login</p>
        <div class="form-item">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form.item">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
        <br>
        <a href="../login.php">LOGIN MASYARAKAT</a>
    </form>
</body>

</html>