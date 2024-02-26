<?php
session_start();

if (!isset($_SESSION['login'])){
    echo "<script type='text/javascript'>
    alert('Harus Login Terlebih Dahulu)
    window.location = 'login.php'
    </script>";
} else {
    require_once '../../data/connection.php';

    $user_query = mysqli_query($connection, "SELECT * FROM users WHERE password='{$_SESSION['login']}'");
    $user = mysqli_fetch_array($user_query)
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome, <?php echo $user['name'];?></h1>
    <p>Username: <?php echo $user['username'];?></p>

    <a href="logout.php">Logout</a>
</body>
</html>

<?php
}
?>
