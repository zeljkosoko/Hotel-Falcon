<?php
require 'functions/db-conn.php';
require 'functions/funkcije.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Falcon</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="hero room-hero gallery-hero">
        <div class="search-phone">
            <div class="phone-card">
                <img src="images/phone.png" alt="">
                <div class="phone-text">
                    <h4>+381 63 1113022</h4>
                    <p>pozivom na broj</p>
                </div>
            </div>
        </div>
        <nav class="navigation container">
            <img src="images/logo.svg" alt="" srcset="">
            <ul class="nav-list">
                <li class="list-item"><a href="index.html">Home</a></li>
                <li class="list-item"><a href="restaurant.html">Restaurant</a></li>
                <li class="list-item"><a href="gallery.html">Galery</a></li>
                <li class="list-item"><a href="rooms.html">Rooms</a></li>
                <li class="list-item"><a href="about.html">About</a></li>
                <li class="list-item"><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="img-header">
            <img src="./images/master.png" alt="">
            <div class="opacity-cover"></div>
        </div>
        <div class="room-header">
            <h1>Food menu</h1>
            <p class="big-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Placerat faucibus viverra interdum enim sed.</p>
        </div>
    </header>
    <div class="menu container">
        <div class="menu-title">
            <h2>Doručak</h2>
            <div class="blue-line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate fusce eget in euismod gravida accumsan. Ornare consectetur diam mi massa. Viverra mi est libero, ut malesuada ut lorem elit.</p>
            <?php
                $dorucak_query = getMenu(1);
            ?>
        </div>
        <div class="menu-content">
            <?php if($dorucak_query -> num_rows > 0) { ?>
                <?php while($dorucak = $dorucak_query -> fetch_assoc()) { ?>
                    <div class="menu-column">
                        <div class="menu-item">
                            <div class="menu-text">
                                <h4><?php echo($dorucak['naziv']);?></h4>
                                <p><?php echo($dorucak['sastojci']);?></p>
                            </div>
                            <div class="menu-price">
                                <h4><?php echo($dorucak['cena']);?></h4>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            <?php }; ?>
         
         
        </div>
        <div class="menu-title">
            <h2>Ručak</h2>
            <div class="blue-line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate fusce eget in euismod gravida accumsan. Ornare consectetur diam mi massa. Viverra mi est libero, ut malesuada ut lorem elit.</p>
        </div>
        <div class="menu-content">
            <div class="menu-column">
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalni Srpski ručak</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                       <h4>949 RSD</h4>
                   </div>
                </div>
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalni Srpski ručak</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>949 RSD</h4>
                </div>
                </div>
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalni Srpski ručak</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>949 RSD</h4>
                </div>
                </div>
            </div>
            <div class="menu-column">
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalni Srpski ručak</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>949 RSD</h4>
                </div>
                </div>
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalni Srpski ručak</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>949 RSD</h4>
                </div>
                </div>
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalni Srpski ručak</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>949 RSD</h4>
                </div>
                </div>
            </div>
        </div>
        <div class="menu-title">
            <h2>Večera</h2>
            <div class="blue-line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate fusce eget in euismod gravida accumsan. Ornare consectetur diam mi massa. Viverra mi est libero, ut malesuada ut lorem elit.</p>
        </div>
        <div class="menu-content">
            <div class="menu-column">
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalna Srpska večera</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                       <h4>649 RSD</h4>
                   </div>
                </div>
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalna Srpska večera</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>649 RSD</h4>
                </div>
                </div>
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalna Srpska večera</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>649 RSD</h4>
                </div>
                </div>
            </div>
            <div class="menu-column">
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalna Srpska večera</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>649 RSD</h4>
                </div>
                </div>
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalna Srpska večera</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>649 RSD</h4>
                </div>
                </div>
                <div class="menu-item">
                    <div class="menu-text">
                        <h4>Tradicionalna Srpska večera</h4>
                        <p>Tri jaja na oko, pršuta, sir, paradajz, masline, tost od integralnog hleba</p>
                    </div>
                   <div class="menu-price">
                    <h4>649 RSD</h4>
                </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="logo-row container">
            <img src="images/logo.png" alt="">
        </div>
        <div class="footer-main container">
            <div class="footer-column">
                <p class="footer-text"><span>Adresa:</span> Bulevar neznanog junaka 32
                    <br>
                 Beograd, Srbija</p>
                 <div class="logos">
                     <img src="images/facebook-icon.png" alt="">
                     <img src="images/instagram-logo.png" alt="">
                     <img src="images/twitter-logo.png" alt="">
                 </div>
             </div>
            <div class="footer-column">
                <p class="footer-text"><span>Email:</span><a href="mailto:contact@hotel-lite.rs">contact@hotel-lite.rs</a> </p>
                <div class="logos">
                    <img src="images/visa-icon.png" alt="">
                    <img src="images/master-icon.png" alt="">
                    <img src="images/paypal-icon.png" alt="">
                </div>
            </div>
            <div class="footer-column">
                <p class="footer-text"><span>Kontakt:</span>  +381 63 123456</p>
            </div>
        </div>
        <div class="rights">
             <p>Hotel Falcon - All right reserved</p>
        </div>
        <div class="designed-by">
            <p>Designed by Zeljko Sokolovic</p>
        </div>
     </footer>
</body>
</html>