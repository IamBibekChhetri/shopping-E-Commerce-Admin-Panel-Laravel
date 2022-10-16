<?php
require_once "../connection.php";
$selectbrand = $_POST['selectbrand'];
$addcategory = $_POST['categoryname'];
$sql = "insert into category (brandid, categoryname) values('$selectbrand', '$addcategory')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: viewcategory.php");
}
else{
    echo "<script>alert('Error')</script>";
}

?>