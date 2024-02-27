<?php

include '../../data/connection.php';

if(isset($_POST['btnRegister'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
    $result = mysqli_query($connection, $query);

    if($result) {
        echo "<script type='text/javascript'>
            alert('Registration successful! Please log in.');
                window.location = 'login.php';
            </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('Registration failed! Please try again.');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <fieldset>
        <legend>Register</legend>
        <form action="" method='post'>
            <input type="text" name="name" placeholder="Masukan nama Anda..." required>
            <input type="username" name="username" placeholder="Masukan username Anda..." required>
            <input type="email" name="email" placeholder="Masukan email Anda..." required>
            <input type="password" name="password" placeholder="Masukan password Anda..." required>
            <button type="submit" name="btnRegister">Register</button>
        </form>
    </fieldset>
</body>
</html>