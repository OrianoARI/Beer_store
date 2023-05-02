<?php
session_start();



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
        <div class="header">
            <h1><a href="#"><img id="logo" src="../assets/img/iltu_logo.png" alt="Logo Il Tusighin"></a></h1>
            <h2>GESTION DES PRODUITS</h2>
        </div>

    </header>
    <main>
        <div class="menu-container">
            <div class="side-menu">
                <ul>
                    <li><a href="home.php"></a>Home</li>
                    <li>Carte</li>
                    <li><a href="#" class="add">Ajouter un produit</a></li>
                </ul>
            </div>
            <div id="menuBurger" class="closed">
                <span class="burger" id="burgerOne"></span>
                <span class="burger" id="burgerTwo"></span>
                <span class="burger" id="burgerThree"></span>
            </div>
        </div>

        <!-----------------------------modal add product-------------------------------->

        <div class="dial-add modal-hidden">
            <form action="../controllers/products_controller.php" method="post" enctype="multipart/form-data">
                <h3>Ajout de produit</h3>
                <input class="input" type="file" name="img" id="img">
                <label for="type">Type de produit</label>
                <div class="select">
                    <select name="type" id="type" value="">
                        <option value="0">Sélectionner un type de produit</option>
                        <option value="beer">Bière</option>
                    </select>
                </div>
                <label for="style">Style:</label>
                <div class="select">
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
                <label for="brand">Marque:</label>
                <input class="input" type="text" name="brand" id="brand">
                <label for="name">Nom:</label>
                <input class="input" type="text" name="name" id="name">
                <label for="degres">Degrès d'alcool (% vol) :</label>
                <input class="input" type="text" id="degres" name="degres">
                <div class="btn">
                    <button type="submit">Ajouter</button>
                    <button type="button" class="close-btn">Annuler</button>
                </div>
            </form>
        </div>
        <!-----------------------------modal add product end-------------------------------->

        <!-----------------------------display product-------------------------------->
        <?php
        $products_array = json_decode(file_get_contents('../bdd/products.json'), true);
        if (!empty($products_array)) {
            echo "<div class='product-list'>";
            foreach ($products_array as $key => $product) {
                echo "<div class='product'>";
                foreach ($products_array[$key] as $key => $value) {
                    if ($key == 'img') {
                        echo "";
                    } else if ($key == 'type') {
                        echo "<p> Type de produit : " . $value . "</p>";
                    } else if ($key == 'style') {
                        echo "<p> Style : " . $value . "</p>";
                    }else if ($key == 'brand') {
                        echo "<p> Marque : " . $value . "</p>";
                    }else if ($key == 'name') {
                        echo "<p> Nom : " . $value . "</p>";
                    }else if ($key == 'degres') {
                        echo "<p> Degrès d'alcool (% vol) : " . $value . "</p>";
                    }
                }
                echo '<img class= "img" alt="image-produit" src="../assets/uploads/' . $product['img'] . '">';
                echo "<div class = 'product-btn'>";
                echo "<button class = 'btn update'><a href='./products_update.php?productId=" . $product['id'] . "'>Modifier</button>";
                echo "<button class = 'btn delete'><a href='../controllers/product_delete_controller.php?productId=" . $product['id'] . "'>Supprimer</a></button>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            if (!empty($_SESSION['error_product_fields'])) {
                echo '<p>' . $_SESSION['error_product_fields'] . '</p>';
                unset($_SESSION['error_product_fields']);
            }
        }
        ?>
        </div>
        <!-----------------------------display product end-------------------------------->
    </main>
    <footer>

    </footer>
    <div class="overlay hidden"></div>

    <script src="../assets/js/products.js"></script>
</body>

</html>

<!--echo "<button class = 'btn update' ><a data-id='".$product['id']."' href='#'>Modifier</button>";-->