<?php
session_start();
include '../data/connection.php';

if(isset($_SESSION['login'])){
    header("Location:index.php");
} else {
    if(isset($_POST['btnLogin'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $result = mysqli_query(
            $connection,
            "SELECT * FROM admins WHERE username='$username' and password='$pass'"
        );
        $row = mysqli_num_rows($result);

        if ($row > 0) {
            $_SESSION['login'] = $pass;
            echo "<script type='text/javascript>
            alert('Login Berhasil!')
                window.location = 'index.php'
            </script>";
            header("location:index.php");
        } else {
            echo "<script type='text/javascript'>
                alert('Username atau Password Anda Salah!');
                </script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Konter Om Kumis</title>
    <link rel="stylesheet" href="../style/form.css">
</head>

<body>
    <div class="container">
        <nav>
            <div class="nav-container">
                <div class="nav-logo">
                    <h1>Konter Om Kumis</h1>
                </div>
                <div class="nav-items">
                    <ul>
                        <li><a href="../">Home</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="main-container">
                <div class="form-container">
                    <div>
                        <h1>Admin Login</h1>
                        <form action="" method="post">
                            <label for="username">Username</label>
                            <input type="username" name="username" placeholder="Masukan username Admin..." required>
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Masukan password Admin..." required>
                            <button type="submit" name="btnLogin">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-container">
                &copy; Konter Om Kumis
            </div>
        </footer>
    </div>
</body>

</html>