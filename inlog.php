<?php
include 'connect.php';
session_start();

$error = '';
if (isset($_POST["inlog"])) {
    $_SESSION["wachtwoord"] = $_POST["wachtwoord"];
    $_SESSION["email"] = $_POST["email"];
            
    $sql = $pdo->prepare("SELECT * FROM acount WHERE wachtwoord = :wachtwoord AND email= :email ");
    $sql->bindParam("wachtwoord", $_POST["wachtwoord"]);
    $sql->bindParam("email", $_POST["email"]);
    $sql->execute();
    $Resultaat = $sql->fetchAll();

    if (count($Resultaat) > 0) {
        $_SESSION["loggedInUser"] = $Resultaat[0]['id'];
        $gebruiker = $_SESSION["loggedInUser"];
        $_SESSION["acountid"] = $_SESSION["loggedInUser"];

        header('Location: index.php');
        exit;
    } else {
        echo '<div><p style="color:#FF0000;text-align:center;font-size:40px;">Wachtwoord of email is niet correct</p></div>';
    } 
}

if (isset($_POST["loguit"])) {
    unset($_SESSION["acountid"]);
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inlog1.css">
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

<?php   
    if(empty($_SESSION["acountid"])) {
?>
    <div class="body">
        <h1>Login klant</h1>
        <form class="container" action="inlog.php" method="post">
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

            <button class="button" type="submit" name="inlog">Login</button>
        </form>

        <div class="nieuw">
            <p class="p">Ben je een nieuwe klant?</p>
            <form action="aanmelden.php" method="post">
                <button class="button" type="submit" name="nieuwacount">Acount aanmaken</button>
            </form>
        </div>
    </div>
    <?php
        } else {
            $id = $_SESSION["acountid"];
            $sql = $pdo->query("SELECT * FROM acount WHERE $id = id");
            $sql->execute();
            foreach ($sql as $row) {
                echo "<h1>Jou persoon informatie</h1>";
                echo "<div class='persoonsinfo'><p>" . $row['voornaam'] . "</p><p>" . $row['achternaam'] . "</p><p>" . $row['email'] . "</p></div>";
                echo "<form action='inlog.php' method='post'><button class='button' type='submit' name='loguit'>log uit</button></form>";
            }
        }
    ?>
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