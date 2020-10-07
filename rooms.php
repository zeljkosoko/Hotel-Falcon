<?php

//konekcija i odgovarajuca funkcija
require 'functions/db-conn.php';
require 'functions/funkcije.php';

$sobe = getRooms();

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
    <header class="hero rooms-hero">
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
        <div class="hero-div container">
            <div class="hero-intro">
                <img class="hero-img" src="images/hero-front.png" alt="">
                <div class="hero-text">
                    <h1>Rooms</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Placerat faucibus viverra interdum enim sed.</p>
                </div>
            </div>
            <div class="hero-search">
                <div class="search-part">
                    <p>Datum početka odsedanja</p>
                    <div class="input-group">
                        <input class="input-day" type="number" placeholder="10">
                        <span class="input-dot">.</span>
                        <input class="input-day" type="number" placeholder="10">
                        <span class="input-dot">.</span>
                        <input class="input-year" type="number" placeholder="2020">
                        <span class="input-dot">.</span>
                        <img src="images/calendar.svg" alt="">
                    </div>
                </div>
                <div class="search-part">
                    <p>Datum završetka odsedanja</p>
                    <div class="input-group">
                        <input class="input-day" type="number" placeholder="10">
                        <span class="input-dot">.</span>
                        <input class="input-day" type="number" placeholder="10">
                        <span class="input-dot">.</span>
                        <input class="input-year" type="number" placeholder="2020">
                        <span class="input-dot">.</span>
                        <img src="images/calendar.svg" alt="">
                    </div>
                </div>
                <div class="search-part">
                        <p>Broj osoba</p>
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                        </select> 
                </div>
                <div class="search-part search-mag">
                    <div class="select-group">
                        <p>Broj dece</p>
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                        </select>
                    </div>
                    <img class="mag" src="images/magnifier.svg" alt=""> 
                </div>
                
            </div>  
        </div>
    </header>
    <div class="separator">
        <img src="images/separator.png" alt="">
    </div>
   <div class="rooms-content container">
        <?php if($sobe -> num_rows > 0) { ?>
            <?php while($soba = $sobe -> fetch_assoc()) { ?>
                <div class="room">
                    <img src="images/master.png" alt="">
                    <div class="room-text">
                        <h2><?php echo $soba['naziv']; ?></h2>
                        <div class="tip-sobe">
                            <img src="images/room-icon.png" alt="">
                            <span><?php echo $soba['tip']; ?></span>
                        </div>
                        <p><?php echo $soba['detaljnije']; ?></p>
                        <a href="room.php?id=<?php echo $soba['sobaID']; ?>" class="btn">Pogledaj sobu</a>
                    </div>
                </div>
            <?php }; ?>
        <?php }; ?>
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