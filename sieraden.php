<?php
include 'connect.php';
session_start();

$_SESSION['catergory'] = 'sieraden';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopstyle5.css">
    <title>Document</title>
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

    <div class="kopje">
        <div class="terughome"><a class="terughomelink" href="index.php">< Home</a></div>
        <div class="kopjeselect">
            <h1>Soorteren</h1>
            <form action="sieraden.php" method="post" class="categorybuton">
                <button name="armband" class="button">Armbanden</button>
                <button name="ketting" class="button">Kettingen</button>
                <button name="oorbel" class="button">Oorbellen</button>
                <button name="alles" class="button">Alle sieraden</button>
            </form>
        </div>
    </div>

    <div class="body">
        <div class="alleproducten">
            <?php
                if(isset($_POST["armband"])) {
                    $sql = $pdo->query("SELECT foto, naam, prijs, id FROM sieraden WHERE catergory = 'armband'");
                } elseif(isset($_POST["ketting"])) {
                    $sql = $pdo->query("SELECT foto, naam, prijs, id FROM sieraden WHERE catergory = 'ketting'");
                } elseif(isset($_POST["oorbel"])) {
                    $sql = $pdo->query("SELECT foto, naam, prijs, id FROM sieraden WHERE catergory = 'oorbel'");
                } elseif(isset($_POST["alles"])) {
                    $sql = $pdo->query("SELECT foto, naam, prijs, id FROM sieraden");
                } else {
                    $sql = $pdo->query("SELECT foto, naam, prijs, id FROM sieraden");
                }
                $sql->execute();
                foreach ($sql as $row) {
                    echo "<div class='product'><a class='linktoproduct' href='product.php?id=" . $row['id'] . "'><img class='fotoproduct' src= fotos/" . $row['foto'] . "><p>" . $row['naam'] . "</p><p>" . $row['prijs'] . "</p></a></div>";
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