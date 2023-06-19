<?php
include 'connect.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style7.css">
    <title>Project</title>
</head>
<body>
    <nav>
        <div class="mededeling_nav">
            <p class="medeling"><span style ="color:hotpink;">Gratis verzenden</span> vanaf €30</p>
            <p class="medeling"><span style ="color:hotpink;">Gratis geschenk</span> bij besteling vanaf €40</p>
        </div>
        <div class="navbar">
            <div class="midden_nav">
                <a href="index.php"><img class="logo" src="fotos/logo.png"></a>
            </div>
            <div class="eind_nav">
                <a href="inlog.php"><img class="nav_img" src="fotos/profile.png"></a>
                <a href="favoriete.php"><img class="nav_img" src="fotos/heart.png"></a>
                <a href="bag.php"><img class="nav_img" src="fotos/bag.png"></a>
            </div>
        </div>
        <div class="onderkant_nav">
            <a class="nav_link" href="index.php">Home</a>
            <a class="nav_link" href="sieraden.php">Sieraden</a>
            <a class="nav_link" href="kleding.php">Kleding</a>
            <a class="nav_link" href="accesoires.php">Accesoires</a>
            <a class="nav_link" href="alles.php">Alles</a>
        </div>
    </nav>

    <div class="body">
        <div class="begin">
            <img class="foto_screen" src="fotos/voorkant.png" alt="">
            <div><button src="alles.php" class="buttonall">Shop all items</button></div>
        </div>
    </div>

    <div class="contentinsta">
        <h1><a class="linkinsta" href="https://www.instagram.com/starsbydaan/">@starbydaan</a></h1>
        <div class="instafotos">
            <img class="instafoto" src="fotos/fotovoor1.png" alt="1">
            <img class="instafoto" src="fotos/fotovoor2.png" alt="2">
            <img class="instafoto" src="fotos/fotovoor3.png" alt="3">
            <img class="instafoto" src="fotos/fotovoor4.png" alt="4">
        </div>
    </div>

    <div class="keuzeblokken">
        <div class="keuzeblok">
            <a class="bloklink" href="sieraden.php">Sieraden</a>
            <img class="blokimg" src="fotos/sieradenvoorbeeld.png" alt="sieraden">
        </div>
        <div class="keuzeblok">
            <a class="bloklink" href="kleding.php">Kleding</a>
            <img class="blokimg" src="fotos/kledingvoorbeeld.png" alt="kleding">
        </div>
        <div class="keuzeblok">
            <a class="bloklink" href="accesoires.php">Accesoires</a>
            <img class="blokimg" src="fotos/accesoiresvoorbeeld.png" alt="accesoires">
        </div>
    </div>

    <footer>
        <div class="blackfooter">
            <div>
                <h3>Vragen over...</h3>
                <p>Bezorgen</p>
                <p>Betalen</p>
                <p>Retourneren</p>
            </div>
            <div>
                <h3>Stars by daan</h3>
                <p>Over ons</p>
                <p>Contacten</p>
                <p>Werken bij</p>
            </div>
            <div>
                <h3>Socials</h3>
                <div class="socials">
                    <img class="sociaallogo" src="fotos/instagram.png" alt="insta">
                    <a class="linksocial" href="https://www.instagram.com/starsbydaan/">Instagram</a>
                </div>
                <div class="socials">
                    <img class="sociaallogo" src="fotos/facbook.png" alt="facebook">
                    <a class="linksocial" href="https://nl-nl.facebook.com/starsbydaan">Facbook</a>
                </div>
                <div class="socials">
                    <img class="sociaallogo" src="fotos/tiktok.png" alt="tiktok">
                    <a class="linksocial" href="https://www.tiktok.com/@starsbydaan">Tiktok</a>
                </div>
            </div>
        </div>
        <div class="eind">
            <div class="einddeel1">
                <img class="logofooter" src="fotos/logo.png" alt="">
                <p>Algemene voorwaarden   /   Privacy & cookies</p>
            </div>
            <img class="betaalfooter" src="fotos/betaal.png" alt="">
        </div>
    </footer>
</body>
</html>