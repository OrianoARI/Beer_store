<?php

$products_array = json_decode(file_get_contents('../bdd/products.json'));

$tmpName = $_FILES["img"]["tmp_name"];
$name = $_FILES["img"]["name"];



//echo ("bienvenue ".$_SESSION["name"]);

move_uploaded_file($tmpName, '../assets/uploads/'.$newName);

$product_img = ["name"=> $name, "productId" => $products_array['id']];
$img_array = json_decode(file_get_contents('./img.json'));
array_push($img_array, $img_user);
$img_array = json_encode($img_array);
file_put_contents('./img.json', $img_array);  
header('location: ../pages/gallerie.php');
?>