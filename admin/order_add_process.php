<?php
require_once "../connection.php";
$selectbrand = $_POST['selectbrand'];
$selectcategory = $_POST['selectcategory'];
$selectproduct = $_POST['selectproduct'];
$ordername = $_POST['ordername'];
$status = $_POST['status'];

$sql = "INSERT INTO order_table (brandid, categoryid, productid, ordername, status) VALUES('$selectbrand', '$selectcategory', '$selectproduct', '$ordername', '$status')";
print_r ($sql);
$query = mysqli_query($conn,$sql);

if($query){
   
    echo "<script>alert('Product add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewproduct.php");
?>