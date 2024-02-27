<?php
session_start();

if (!isset($_SESSION['login'])){
    echo "<script type='text/javascript'>
    alert('Harus Login Terlebih Dahulu')
    window.location = 'login.php'
    </script>";
} else {
    
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
                        <h1>Add Package</h1>
                        <form action="" method="post">
                            <label for="pkg-id">Package ID</label>
                            <input type="number" name="pkg-id" placeholder="Masukan Package ID..." required>
                            <label for="pkg-name">Package Name</label>
                            <input type="text" name="pkg-name" placeholder="Masukan Package Name..." required>
                            <label for="provider">Provider</label>
                            <input type="text" name="provider" placeholder="Masukan Provider..." required>
                            <label for="price">Price</label>
                            <input type="number" name="price" placeholder="Masukan price..." required>
                            <label for="selled-qty">Selled Qty</label>
                            <input type="text" name="selled-qty" placeholder="Masukan Selled Qty..." required>
                            <label for="pkg-heroimg">Package Heroimg</label>
                            <input type="text" name="pkg-heroimg" placeholder="Masukan link heroimg..." required>
                            <label for="pkg-thumbnail">Package Thumbnail</label>
                            <input type="text" name="pkg-thumbnail" placeholder="Masukan link thumbnail..." required>
                            <button type="submit" name="btnLogin">Commit</button>
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

<?php
}
?>