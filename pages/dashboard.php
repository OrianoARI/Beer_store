<?php
session_start()
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin_style.css">
    <title>dashboard</title>
</head>

<body>
    <header>
        <h1><a href="#"><img id="logo" src="../assets/img/iltu_logo.png" alt="Logo Il Tusighin"></a></h1>
        <h2>DASHBOARD</h2>

    </header>
    <main>
        <div class="dashboard-command" id="products" onclick= 'window.location.href = "./products.php"'>
            <h3>Gestion de produits</h3>
        </div>
    </main>
    <footer>

    </footer>
    <script src="../assets/js/home.js"></script>
</body>

</html>