<?php
require_once "../connection.php";
$selectbrand = $_POST['selectbrand'];
$selectcategory = $_POST['selectcategory'];
$selectproduct = $_POST['selectproduct'];
$size = $_POST['sizeitem'];
$status = $_POST['status'];

$sql = "INSERT INTO size (brandid, categoryid, productid, size, status) VALUES('$selectbrand', '$selectcategory', '$selectproduct', '$size', '$status')";
$query = mysqli_query($conn,$sql);

if($query){
   
    echo "<script>alert('Size add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewsize.php");
?>