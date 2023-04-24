<?php
session_start()
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/home_style.css">
    <title>Home</title>
</head>

<body>
    <header>
        <h1><a href="#"><img id="logo" src="../assets/img/iltu_logo.png" alt="Logo Il Tusighin"></a></h1>
        <button class="login"><a href="./login.php">Connexion</a></button>
        <button class="subscribe"><a href="./subscribe.php">Créer un compte</a></button>
       
    </header>
    <main>
    <div class="menu-container">
            <div class="side-menu">
                <h2>Menu</h2>
                <ul>
                    <li>Home</li>
                    <li>Actualités</li>
                    <li>Carte</li>
                    <li>Nous contacter</li>
                    <li>Galeries</li>
                </ul>
            </div>
            <div id="menuBurger" class="closed">
                <span class="burger" id="burgerOne"></span>
                <span class="burger" id="burgerTwo"></span>
                <span class="burger" id="burgerThree"></span>
            </div>
        </div>
    </main>
    <footer>
<a href="./dashboard.php">Administration</a>
    </footer>
    <script src="../assets/js/home.js"></script>
</body>

</html>