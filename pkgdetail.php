<?php

include_once('data/connection.php');
/*
include = gak ada pun ga error
require = connection.php harus ada
*/

$selectedPkg = $_GET['id'];

//fetching data from database
$result = mysqli_query($connection, "SELECT * FROM packages WHERE pkg_id = $selectedPkg");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Konter Om Kumis</title>
    <link rel="stylesheet" href="style/pkgdetail.css">

</style>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="main-container">
            <?php
                    $packages = mysqli_fetch_array($result);
                    // echo "
                    //     <a href='pages/pkgdetail.php?id=".$packages['pkg_id']."'>
                    //     <div class='catalogues'>
                    //         <div class='catalogue-hero'><img src='".$packages['pkg_heroimg']."'></div>
                    //         <div class='catalogue-detail'>
                    //             <h3>".$packages['pkg_name']."</h3>
                    //             <h4>Rp. ".$packages['price']."</h4>
                    //             <h5>".$packages['selled_qty']."</h5>
                    //         </div>
                    //     </div>
                    //     </a>     
                    // ";

                    echo "
                    <div class='heroimg-container'>
                        <img src='".$packages['pkg_heroimg']."' alt='hero-img'>
                    </div>
                    <div class='details-container'>
                        <h2>".$packages['pkg_name']."</h2>
                        <h3>".$packages['selled_qty']."</h3>
                        <h1>Rp. ".number_format($packages['price'], 0, ",", ".")."</h1>
                        
                        <button>Beli Sekarang!</button>
                    </div>
                
                ";
                    //salah satu solusi agar gambar muncul, coba di hosting dulu gambarnya.
                 ?>
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