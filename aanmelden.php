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
    <link rel="stylesheet" href="inlog.css">
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
            if (isset($_POST["aanmelden"])) {
                $email = $_POST['email'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error = "<h2 style='color:red;'>Geen geldig email adres</h2>";
                    echo $error;
                }
                
                $query = $pdo->prepare("SELECT * FROM acount WHERE email = ?");
                $query->execute([$email]);
                $result = $query->rowCount();
            
                if ($result > 0) {
                    $error = "<h2 style='color:red;'>Email bestaat al kies een andere email..</h2>";
                    echo $error;
                }

                if (empty($error)) {
                    $sql = $pdo->prepare("INSERT INTO acount SET 
                            email = :email, 
                            wachtwoord = :wachtwoord,
                            achternaam = :achternaam,
                            voornaam = :voornaam
                        ");

                    $sql->bindParam(':email', $_SESSION["acountid"]);
                    $sql->bindParam(':wachtwoord', $_POST['wachtwoord']);
                    $sql->bindParam(':achternaam', $_POST['achternaam']);
                    $sql->bindParam(':voornaam', $_POST['voornaam']);

                    if ($sql->execute()) {
                        header('location: inlog.php');
                    }     
                }
            }
        ?>
        <h1>Acount aanmaken</h1>
        <form class="container" action="aanmelden.php" method="post">
            <div>
                <div class="container2">
                    <label for="voornaam">Voornaam</label>
                </div>
                <div class="container2">
                    <input class="input" type="text" name="voornaam" required>
                </div>
            </div>
            <div>
                <div class="container2">
                    <label for="achternaam">Achternaam</label>
                </div>
                <div class="container2">
                    <input class="input" type="text" name="achternaam" required>
                </div>
            </div>
            <div>
                <div class="container2">
                    <label for="email">Email</label>
                </div>
                <div class="container2">
                    <input class="input" type="text" name="email" required>
                </div>
            </div>
            <div>
                <div class="container2">
                    <label for="wachtwoord">Wachtwoord</label>
                </div>
                <div class="container2">
                    <input class="input" type="password" name="wachtwoord" required>
                </div>
            </div>
            <button class="button" type="submit" name="aanmelden">Aanmelden</button>
        </form>
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