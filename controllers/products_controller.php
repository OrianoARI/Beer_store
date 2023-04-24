<?php
session_start();

$productType = $_POST['type'];
$style = $_POST['style'];
$brand = $_POST['brand'];
$name = $_POST['name'];
$degres = $_POST['degres'];

if (!empty($productType) && !empty($style) && !empty($brand) && !empty($name) && !empty($degres)){
    $products_array = json_decode(file_get_contents('../bdd/products.json'));
        $product = $_POST;
        $product["id"] = $productType."_".$brand."_".$name;
        array_push($products_array, $product);
        $products_array = json_encode($products_array);
        print_r($products_array);
        file_put_contents('../bdd/products.json', $products_array);
        header('location: ../pages/products.php');
}






















?>