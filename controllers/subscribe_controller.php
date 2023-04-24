<?php
session_start();
$birth_date = $_POST['birthDate'];
$today = date("Y-m-d");
$diff = date_diff(date_create($birth_date), date_create($today));
$name = $_POST["name"];
$first_name = $_POST["firstName"];
$birth_date = $_POST["birthDate"];
$email = $_POST["email"];
$password = $_POST["password"];


if ($diff->format('%y') >= 0) { //Attention modifier l'âge
    if (!empty($name) && !empty($first_name) && !empty($birth_date) && !empty($_POST["email"]) && !empty($password)) {
        $users_array = json_decode(file_get_contents('../bdd/users.json'));
        $user = $_POST;
        $user_pass = $_POST["password"];
        $db_pass = password_hash($user_pass, PASSWORD_DEFAULT);
        $user["password"] = $db_pass;
        $user["id"] = uniqid();
        array_push($users_array, $user);
        $users_array = json_encode($users_array);
        print_r($users_array);
        file_put_contents('../bdd/users.json', $users_array);
        header('location: ../pages/login.php');
    } else {
        $_SESSION['error_empty_fields'] = "Veuillez remplir tous les champs obligatoires";
        header('location: ../pages/subscribe.php');
    }
} else {
    $_SESSION['error_age'] = "Vous n'avez pas l'âge requis";
    header('location: ../pages/subscribe.php');
}
?>

