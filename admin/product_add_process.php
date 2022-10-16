<?php
require_once "../connection.php";
$selectbrand = $_POST['selectbrand'];
$selectcategory = $_POST['selectcategory'];
$productname = $_POST['productname'];
$productpic = $_FILES['productpic']['name'];
$productpicTmp = $_FILES['productpic']['tmp_name'];
$directory = "img/".$productpic;
$status = $_POST['status'];



$sql = "INSERT INTO products (brand_id, category_id, productname, productpic, status) values('$selectbrand', '$selectcategory', '$productname', '$productpic', '$status')";
$query = mysqli_query($conn,$sql);

if($query){
    move_uploaded_file($productpicTmp, $directory);
    echo "<script>alert('Product add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewproduct.php");
?>