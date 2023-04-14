<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <main>
        <h1>Connexion</h1>
        <form method="post" action="../controllers/login_controller.php">
        <label for="email">Identifiant :</label>
        <input type="email" name="email" id="email" placeholder="Saisir l'adresse mail">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe">
        <button type="submit">Valider</button>
        </form>
        <?php
                if (!empty($_SESSION['error_password'])) {
                    echo '<p>' . $_SESSION['error_password'] . '</p>';
                    unset($_SESSION['error_password']);
                }
                if (!empty($_SESSION['error_login'])) {
                    echo '<p>'. $_SESSION['error_login']. '</p>';
                    unset($_SESSION['error_login']);
                }
                if (!empty($_SESSION['error_empty'])) {
                    echo '<p>'. $_SESSION['error_empty']. '</p>';
                    unset($_SESSION['error_empty']);
                }
                ?>  
        <div>
            <a href="./subscribe.php">Pas encore de compte</a>
            <a href="">J'ai oublié mon mot de passe</a>
        </div>
    </main>
</body>
</html>