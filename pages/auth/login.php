<?php
session_start();
include '../../data/connection.php';
if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $pass = md5($_POST['password']);
    $result = mysqli_query(
        $connection,
        "SELECT * FROM users WHERE username='$username' and password='$pass'"
    );
    $row = mysqli_num_rows($result);

    if ($row > 0) {
        $_SESSION['login'] = $pass;
        echo "<script type='text/javascript>
        alert('Login Berhasil!')
            window.location = 'profile.php'
        </script>";
        header("location:profile.php");
    } else {
        echo "<script type='text/javascript'>
            alert('Username atau Password Anda Salah!');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Halaman Login</legend>
        <form action="" method="post">
            <input type="username" name="username" placeholder="Masukan username" required>
            <input type="password" name="password" placeholder="Masukan password" required>
            <button type="submit" name="btnLogin">Login</button>
        </form>
    </fieldset>
</body>
</html>