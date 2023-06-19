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
    <link rel="stylesheet" href="shopstyle5.css">
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
    <?php
        if(empty($_SESSION["acountid"])) {
    ?>
            <h1>Maak eerst een acount aan of login</h1>
            <form action="inlog.php">
                <button class="button" type="submit" name="firstinlog">Inlogen</button>
            </form>
            <form action="aanmelden.php" method="post">
                <button class="button" type="submit" name="firstacount">Acount aanmaken</button>
            </form>
    <?php
        } else {
    ?>  
        <h1>Winkelmand</h1>
        <div class="alleproducten">
    <?php

        $sql = $pdo->prepare("INSERT INTO bag SET 
                idpersoon = :idpersoon, 
                naam = :naam,
                prijs = :prijs,
                foto = :foto
            ");

        $sql->bindParam(':idpersoon', $_POST['idpersoon']);
        $sql->bindParam(':naam', $_POST['naam']);
        $sql->bindParam(':prijs', $_POST['prijs']);
        $sql->bindParam(':foto', $_POST['foto']);

        if ($sql->execute()) {
            header('location: bag.php');
        }
            // $sql = $pdo->query("SELECT foto, naam, prijs, size, id FROM " . $_SESSION['catergory'] . " WHERE size = 'S' AND id = " . $_SESSION['id'] . "");
            // $sql->execute();
            // foreach ($sql as $row) {
            //     echo "<div class='product'><img class='fotoproduct' src= fotos/" . $row['foto'] . "><p>" . $row['naam'] . "</p><p>" . $row['prijs'] . "</p></div>";
            // }
            // echo $_SESSION['catergory'];
            // echo $_SESSION['id'];
        }        
    ?>
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