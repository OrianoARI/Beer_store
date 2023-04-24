<?php
session_start();



//        $_SESSION['product'] = "<div class='products-list'>";
//"<h4>".$brand." ".$name."</h4>";
//"<p>Type: ".$productType."</p>";
//"<p>Style: ".$style."</p>";
//"<p>Degrés d'alcool: ".$degres."</p>";
//"</div>";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin_style.css">
    <title>Gestion des produits</title>
</head>

<body>
    <header>
        <h1><a href="#"><img id="logo" src="../assets/img/iltu_logo.png" alt="Logo Il Tusighin"></a></h1>
        <h2>GESTION DES PRODUITS</h2>

    </header>
    <main>
        <a href="#" class="add">Ajouter un produit</a>
        <dialog class="dial-add">
            <form action="../controllers/products_controller.php" method="post">
                <h3>Ajout de produit</h3>
                <input type="file" name="img" id="img">
                <label for="type">Type de produit</label>
                <select name="type" id="type" value="">
                    <option value="0">Sélectionner un type de produit</option>
                    <option value="beer">Bière</option>
                </select>
                <label for="style">Style:</label>
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
                <label for="brand">Marque:</label>
                <input type="text" name="brand" id="brand">
                <label for="name">Nom:</label>
                <input type="text" name="name" id="name">
                <label for="degres">Degrès d'alcool :</label>
                <input type="text" id="degres" name="degres">
                <div class="btn">
                    <button type="submit">Ajouter</button>
                    <button>Annuler</button>
                </div>
            </form>
        </dialog>
        <?php
        $products_array = json_decode(file_get_contents('../bdd/products.json'), true);
        if (!empty($products_array)) {
            echo "<div class='product-list'>";
            foreach ($products_array as $key => $value) {
                foreach ($products_array[$key] as $key => $value) {
                    echo "<p>" . $key . " : " . $value . "</p>";
                }
                echo "<button class = 'btn' id = 'edit'>Modifier</button>";
                echo "<button class = 'btn' id = 'delete'>Supprimer</button>";
            }
        }
        echo "</div>";
        ?>

        </div>

    </main>
    <footer>

    </footer>
    <div class="overlay hidden"></div>

    <script src="../assets/js/admin.js"></script>
</body>

</html>