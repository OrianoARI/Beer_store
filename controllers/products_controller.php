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
        $product["img"] = $product["id"]."_".$_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"],'../assets/uploads/'.$product["img"]);
        array_push($products_array, $product);
        $products_array = json_encode($products_array);

        file_put_contents('../bdd/products.json', $products_array);
        header('location: ../pages/products.php');
}else{
    $_SESSION['error_product_fields'] = "Veuillez remplir tous les champs";
    header('Location:../pages/products.php');
}
