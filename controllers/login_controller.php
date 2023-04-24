<?php
session_start();
if (!empty($_POST["email"]) && !empty($_POST["password"])) {//on vérifie que les champs soient bien rempli
    $users_array = json_decode(file_get_contents('../bdd/users.json'));//décodage du fichier .json afin qu'il puisse être interprété en php
    $user_filter = array_filter($users_array, function ($user) {
        return $user->email == $_POST['email']; //on récupère l'utilisateur par son mot de passe (seulemnt si le mail saisi dans le champs du formulaire existe dans $users_array sinon $user_filter sera vide)
    });
    $user_filter = array_values($user_filter);  // On réordonne le tableau
    if (!empty($user_filter)) { //si $user_filter n'est pas vide (signifie que le mail saisi par l'utilisateur existe)
        if ($user_filter[0]->id != "1") { // si id = 1 c'est un id admin
            if (password_verify($_POST['password'], $user_filter[0]->password)) { //password_verify compare le password sais par celui qui est stocké dans le .json et qui est hashé
                header('Location: ../pages/home.php');//rdirection vers la page souhaité
            } else {
                $_SESSION['error_password'] = "Mot de passe incorrect";//message d'erreur mot de passe
                header('Location:../pages/login.php');
            }
        } else {
            echo "<script>alert('Vous n\'avez pas encore de connexion')";
        }
        if ($user_filter[0]->id == "1") {
            if (password_verify($_POST['password'], $user_filter[0]->password)) {
                header('Location:../pages/dashboard.php');
            } else {
                $_SESSION['error_password'] = "Mot de passe incorrect";
                header('Location:../pages/login.php');
            }
        }
    }else{
        $_SESSION['error_login'] = "Adresse mail incorrect";
        header('Location:../pages/login.php');
    }
} else {
    $_SESSION['error_empty'] = "Veuillez remplir tous les champs";
    header('Location:../pages/login.php');
}
?>
