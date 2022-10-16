<?php
require_once "../connection.php";
$selectbrand = $_POST['selectbrand'];
$selectcategory = $_POST['selectcategory'];
$selectproduct = $_POST['selectproduct'];
$selectsize = $_POST['selectsize'];
$selectorder = $_POST['selectorder'];
$price = $_POST['price'];
$status = $_POST['status'];

$sql = "INSERT INTO price (brandid, categoryid, productid, sizeid, orderid, price, status) VALUES('$selectbrand', '$selectcategory', '$selectproduct', '$selectsize', '$selectorder', '$price', '$status')";
$query = mysqli_query($conn,$sql);

if($query){
   
    echo "<script>alert('Price add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewprice.php");
?>