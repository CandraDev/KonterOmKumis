<?php

include_once('data/connection.php');
/*
include = gak ada pun ga error
require = connection.php harus ada
*/


//fetching data from database
$result = mysqli_query($mysqli, "SELECT * FROM packages ORDER BY pkg_id ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Konter Om Kumis</title>
    <link rel="stylesheet" href="style/index.css">
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="sidebar-container">
                <ul>
                    <li><h3>Provider</h3></li>
                    <li><a href="#">Telkomsel</a></li>
                    <li><a href="#">XL Axia</a></li>
                    <li><a href="#">By.U</a></li>
                    <li><a href="#">Indosat</a></li>
                    <li><a href="#">Smartfren</a></li>
                    <li></li>
                    <li><h3>FAQ</h3></li>
                    <li><a href="#">Cara Bayar</a></li>
                    <li><a href="#">Metode <br> Pembayaran</a></li>
                    <li><a href="#">Gerai Terdekat</a></li>
                </ul>
            </div>
            <!-- <div class="faq-bar">
                <ul>
                    <li><h3>FAQ</h3></li>
                    <li><a href="#">Smartfren</a></li>
                    <li><a href="#">XL Axia</a></li>
                    <li><a href="#">Telkomsel</a></li>
                </ul>
            </div> -->
        <main>
            <div class="main-container">
                <div class="catalogues-container">  
                    
                <?php
                while($packages = mysqli_fetch_array($result)) {
                    
                    echo "
                        <a href='pages/pkgdetail.php?id=".$packages['pkg_id']."'>
                        <div class='catalogues'>
                            <div class='catalogue-hero'><img src='".$packages['pkg_thumbimg']."'></div>
                            <div class='catalogue-detail'>
                                <h3>".$packages['pkg_name']."</h3>
                                <h4>Rp. ".number_format($packages['price'], 0, ",", ".")."</h4>
                                <h5>".$packages['selled_qty']."</h5>
                            </div>
                        </div>
                        </a>     
                    ";
                    //salah satu solusi agar gambar muncul, coba di hosting dulu gambarnya.
                } ?>
                
                    
               
                    
                    <!-- <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/telkomsel-2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>10GB - Telkomsel</h3>
                                <h4>Rp. 158.000</h4>
                                <h5>Terjual 15+</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/telkomsel-3.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>15GB - Telkomsel</h3>
                                <h4>Rp. 343.000</h4>
                                <h5>Terjual 6+</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/xl-1.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>1GB - XL Axiata</h3>
                                <h4>Rp. 23.800</h4>
                                <h5>Terjual 40+</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/xl-2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>3GB - XL Axiata</h3>
                                <h4>Rp. 244.000</h4>
                                <h5>Terjual 12+</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/xl-3.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>10GB - XL Axiata</h3>
                                <h4>Rp. 199.000</h4>
                                <h5>Terjual 24+</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/byu1.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>500MB - By.U</h3>
                                <h4>Rp. 999.001</h4>
                                <h5>Terjual 4+ By.U x Kobo</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/byu2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>1GB - By.U </h3>
                                <h4>Rp. 1.692.000</h4>
                                <h5>Terjual 3+ By.U x Kobo</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/byu3.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>1.5GB - By.U</h3>
                                <h4>Rp. 1.599.000</h4>
                                <h5>Terjual 100+ By.U x Kobo</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/indosat-1.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>1GB - Indosat</h3>
                                <h4>Rp. 299.403</h4>
                                <h5>Terjual 3+ Indosat x Ireng</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/indosat-3.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>3GB - Indosat</h3>
                                <h4>Rp. 569.000</h4>
                                <h5>Terjual 6+ Indosat x Ireng</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/indosat-5.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>5GB- Indosat</h3>
                                <h4>Rp. 893.000</h4>
                                <h5>Terjual 12+ Indosat x Ireng</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/smartfren-1.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>10MB - Smartfren</h3>
                                <h4>Rp. 396.000</h4>
                                <h5>Terjual 40+ Hitler Edition</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/smartfren-2.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>100MB - Smartfren</h3>
                                <h4>Rp. 299.100</h4>
                                <h5>Terjual 30+ Hitler Edition</h5>
                            </div>
                        </div>
                    </a>                    
                    
                    <a href="">
                        <div class="catalogues">
                            <div class="catalogue-hero"><img src="images/smartfren-3.png" alt="Item 1 picture"></div>
                            <div class="catalogue-detail">
                                <h3>500MB - Smartfren</h3>
                                <h4>Rp. 899.000</h4>
                                <h5>Terjual 15+ Hitler Edition</h5>
                            </div>
                        </div>
                    </a>                 -->
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