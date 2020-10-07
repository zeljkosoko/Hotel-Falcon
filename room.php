<?php 
//konekcije i odgovarajuca funkcija
require 'functions/db-conn.php';
require 'functions/funkcije.php';

//$_GET je super global variabla koja getuje ID sa forme
$id = $_GET['id'];
$soba_array = getRoom($id);
$soba = mysqli_fetch_array($soba_array, MYSQLI_ASSOC);
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
            <h1><?php echo $soba['naziv']; ?></h1>
            <p class="big-p"><?php echo $soba['opis']; ?></p>
        </div>
    </header>
    <div class="room-details container">
        <div class="room-gallery">
            <img class="master-img" src="images/master.png" alt="">
            <div class="small-imgs">
                <img src="images/master1.png" alt="">
                <img src="images/master2.png" alt="">
                <img src="images/master3.png" alt="">
            </div>
        </div>
        <div class="room-text">
            <h3><?php echo $soba['tip'] ?></h3>
            <div class="blue-line"></div>
            <p class="small-p"><?php echo $soba['detaljnije'] ?></p>
            <div class="room-devices">
                <div class="room-device">
                    <img src="images/room-table.png" alt="">
                    <span>Radni sto</span>
                </div>
                <div class="room-device">
                    <img src="images/room-fridge.png" alt="">
                    <span>Mini bar</span>
                </div>
                <div class="room-device">
                    <img src="images/room-ac.png" alt="">
                    <span>Klima</span>
                </div>
            </div>
            <div class="room-devices">
                <div class="room-device">
                    <img src="images/room-tv.png" alt="">
                    <span>Televizor</span>
                </div>
                <div class="room-device">
                    <img src="images/room-phone.png" alt="">
                    <span>Telefon</span>
                </div>
                <div class="room-device">
                    <img src="images/room-wifi.png" alt="">
                    <span>Internet</span>
                </div>
            </div>
            <div class="blue-line full-line"></div>
            <div class="room-price">
                <p>već od <span><?php echo $soba['cena'] ?></span>RSD</p>
                <button class="btn">Rezerviši</button>
            </div>
            <div class="taxi">
                <img src="images/taxi.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Placerat faucibus viverra interdum enim sed. </p>
            </div>
        </div>
    </div>
   <div class="newsletter">
        <h2>Prijavite se za Newsletter</h2>
        <form action="">
            <input type="email" placeholder="Vas email..">
            <input class="btn" type="submit" value="Prijavi se">
        </form>
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