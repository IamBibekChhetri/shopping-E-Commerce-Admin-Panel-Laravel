<?php

require_once "../connection.php";
$updatebrand = $_POST['editbrand'];
$updatecategory = $_POST['editcategory'];
$updateproduct = $_POST['editproduct'];
$productpic = $_FILES['productpic']['name'];


$id = $_GET['id'];


if($productpic){
    $productpicTmp = $_FILES['productpic']['tmp_name'];
    $directory = "img/".$productpic;

    $sql = "UPDATE products SET  brand_id = '$updatebrand', category_id = '$updatecategory', productname = '$updateproduct', productpic = '$productpic'  WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
if($result){
    move_uploaded_file($productpicTmp, $directory);
    header("Location: viewproduct.php");
}
}
else{
    $sql = "UPDATE products SET  brand_id = '$updatebrand', category_id = '$updatecategory', productname = '$updateproduct'  WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        header("Location: viewproduct.php");

    }
}

?>