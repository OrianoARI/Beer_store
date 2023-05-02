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
            <h2>MODIFICATION DE PRODUIT</h2>
        </div>

    </header>
    <main>
        <div class="dial-update">
            <form action="../controllers/product_update_controller.php" method="post" enctype="multipart/form-data">
                <?php

                $products_array = json_decode(file_get_contents('../bdd/products.json'), true);



                $product_filter = array_filter($products_array, function ($product) {

                    return $product["id"] == $_GET['productId']; //on récupère l'utilisateur par son mot de passe (seulemnt si le mail saisi dans le champs du formulaire existe dans $users_array sinon $user_filter sera vide)
                });
                $product_filter = array_values($product_filter);
                print_r($product_filter[0]);
                $productImg = "../assets/uploads/" . $product_filter[0]['img'];
                echo $productImg;
                echo "<img style = 'width : 200px' src='../assets/uploads/" . $product_filter[0]['img'] . "'/> //mettre le style dans fichier CSS

                <input class='input' type='file' name='img' id='img'>
                <label for='type'>Type de produit</label>
                <div class='select'>
                     <select name='type' id='type'>
                     <option value='" . $product_filter[0]["type"] . "'>" . $product_filter[0]["type"] . "</option>
                         <option value='beer'>Bière</option>
                     </select>
                </div>
                <label for='style'>Style:</label>
                <div class='select'>
                    <select name='style' id='style'>
                        <option value='" . $product_filter[0]["style"] . "'>" . $product_filter[0]["style"] . "</option>"; ?>
                <option value='paleAles'>Pale ales</option>
                <option value='belgian'>Belges</option>
                <option value='sours'>Sours</option>
                <option value='amber'>Ambrées</option>
                <option value='stouts'>Stouts</option>
                <option value='porters'>Porters</option>
                <option value='specials'>Spéciales</option>
                <option value='darkLagers'>Dark Lagers</option>
                <option value='paleLagers'>Pale Lagers</option>
                <option value='bocks'>Bocks</option>
                <option value='other'>Autre</option>
                </select>
        </div>"
        <label for="brand">Marque:</label>
        <input class="input" type="text" name="brand" id="brand" value="<?php echo $product_filter[0]['brand']; ?>">
        <label for="name">Nom:</label>
        <input class="input" type="text" name="name" id="name" value="<?php echo $product_filter[0]['name']; ?>">
        <label for="degres">Degrès d'alcool (% vol) :</label>
        <input class="input" type="text" id="degres" name="degres" value="<?php echo $product_filter[0]['degres']; ?>">
        <label for="id">Référence produits :</label>
        <input class="input" type="text" id="id" name="id" readonly="readonly" value="<?php echo $product_filter[0]['id'];  ?>">
        <input class="input" type="texte" id="pic" name="pic"  value="<?php echo $product_filter[0]['img'];  ?>">
        <div class="btn">
            
            <button type="submit">Valider</button>
            <button type="button" class="close-update-btn">Annuler</button>
        </div>
        </form>
        </div>

        <!-----------------------------modal update product end-------------------------------->
    </main>
    <footer>

    </footer>
    <div class="overlay hidden"></div>

    <script src="../assets/js/products_update.js"></script>
</body>

</html>

<!--echo "<button class = 'btn update' ><a data-id='".$product['id']."' href='#'>Modifier</button>";-->