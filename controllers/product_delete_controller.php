<?php
session_start();

$products_array = json_decode(file_get_contents('../bdd/products.json'));
//print_r($products_array);

foreach ($products_array as $key => $value) {
   //echo $products_array[$key]->id;
   if ($products_array[$key]->id == $_GET['productId']) {
    unlink("../assets/uploads/".$products_array[$key]->img."");
    unset($products_array[$key]);
   }
}
$products_array = array_values($products_array);
$products_array = json_encode($products_array);
file_put_contents('../bdd/products.json', $products_array);
header('location: ../pages/products.php');


//$product_filter = array_filter($products_array, function ($product) {
 //   return $product["id"] == $_GET['productId']; //on récupère l'utilisateur par son mot de passe (seulemnt si le mail saisi dans le champs du formulaire existe dans $users_array sinon $user_filter sera vide)
//});

?>