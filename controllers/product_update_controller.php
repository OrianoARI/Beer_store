
<?php
session_start();

$type = $_POST['type'];
$style = $_POST['style'];
$brand = $_POST['brand'];
$name = $_POST['name'];
$degres = $_POST['degres'];
$oldImgName = $_POST['pic'];







// if ($_FILES['img']['size'] <= 0) {
//     echo '<p>kndskgnsdk</p>';
// }



if (!empty($type) && !empty($style) && !empty($brand) && !empty($name) && !empty($degres)) {
    $products_array = json_decode(file_get_contents('../bdd/products.json'), true);
    $index = null;
    foreach($products_array as $key => $value){
        if ($value['id'] == $_POST['id']) {
            $index = $key;
            break;
        } 
    }
    $products_array[$index] = $_POST; 
    $products_array[$index]['id'] = $type . "_" . $brand . "_" . $name;
    if ($_FILES['img']['size'] > 0){
        $products_array[$index]["img"] = $products_array[$index]["id"]."_".$_FILES["img"]["name"];
        unlink("../assets/uploads/" . $oldImgName . "");
        move_uploaded_file($_FILES["img"]["tmp_name"],'../assets/uploads/'.$products_array[$index]["img"]);
    }else{
        $products_array[$index]["img"] = $oldImgName;
    }
    $products_array = json_encode($products_array);
    file_put_contents('../bdd/products.json', $products_array);
    header('location: ../pages/products.php');
} else {
    echo 'échec';
    die;
    $_SESSION['error_product_fields'] = "Veuillez remplir tous les champs";
    header('Location:../pages/products.php');
}





// if ($_FILES['img']['size'] > 0) {
//     unlink("../assets/uploads/" . $products_array[$key]->img . "");
//     $product["img"] = $product["id"] . "_" . $_FILES["img"]["name"];
//     move_uploaded_file($_FILES["img"]["tmp_name"], '../assets/uploads/' . $product["img"]);
// }




?>