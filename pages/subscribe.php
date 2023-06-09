<?php
session_start()
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Inscription</title>
</head>

<body>
    <header>
    </header>
    <main>
        <h2>Formulaire d'inscription</h2>
        <form action="../controllers/subscribe_controller.php" method="post" class="subscribe">
            <h3>Données personnelles</h3>
            <div class="form-one">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" value="<?php if (isset($_POST["name"])) {
                                                                    echo $_POST["name"];
                                                                } ?>">
                <label for="firstName">Prénom :</label>
                <input type="text" name="firstName" id="firstName">
                <label for="birthDate">Date de naissance :</label><!--âge légal-->
                <input type="date" name="birthDate" id="birthDate">
                <?php
                if (!empty($_SESSION['error_age'])) {
                    echo '<p>' . $_SESSION['error_age'] . '</p>'; //message d'erreur en cas d'âge<18ans => récupère dans le controller
                    unset($_SESSION['error_age']); //désactive le message en cas de rechargement de la page
                }
                ?>
                <label for="email">Email :</label>
                <input type="mail" name="email" id="email" placeholder="name@mail.com">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password">
                <label for="tel">Numéro de téléphone :</label>
                <input type="tel" name="tel" id="tel">
                <label for="style">Style de bière préférée :</label>
                <select name="style" id="style">
                    <option value="0">Choisissez un style</option>
                    <option value="paleAles">Pale ales</option>
                    <option value="belgian ">Belges</option>
                    <option value="sours">Sours</option>
                    <option value="amber">Ambrées</option>
                    <option value="stouts">Stouts</option>
                    <option value="porters">Porters</option>
                    <option value="specials">Spéciales</option>
                    <option value="darkLagers">Dark Lagers</option>
                    <option value="paleLagers">Pale Lagers</option>
                    <option value="bocks">Bocks</option>
                    <option value="other">Autre</option>
                </select>
            </div>
            <button type="submit">Enregistrer</button>
            <button type="reset">Effacer</button>
            <?php
            if (!empty($_SESSION['error_empty_fields'])) {
                echo '<p>' . $_SESSION['error_empty_fields'] . '</p>';
                unset($_SESSION['error_empty_fields']);
            }
            ?>
        </form>

    </main>
    <footer>

    </footer>
</body>

</html>