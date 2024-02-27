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
    <link rel="stylesheet" href="../style/admin.css">
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
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="main-container">
                <div class="catalogues-container">  
                    <a href="addpkg.php">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/telkomsel-2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h1>Add Package</h1>
                            </div>
                        </div>
                    </a>
                    <a href="admin/login.php">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/telkomsel-2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h1>Edit Package</h1>
                            </div>
                        </div>
                    </a>
                    <a href="admin/login.php">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/telkomsel-2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h1>Delete Package</h1>
                            </div>
                        </div>
                    </a>
                    <a href="admin/login.php">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/telkomsel-2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h1>Manage Admins</h1>
                            </div>
                        </div>
                    </a>
                    <a href="admin/login.php">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/telkomsel-2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h1>Manage Users</h1>
                            </div>
                        </div>
                    </a>
                    <a href="logout.php">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/telkomsel-2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h1>Logout as Admin</h1>
                            </div>
                        </div>
                    </a>
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