<?php

require_once "../connection.php";
$updatebrand = $_POST['editbrand'];
$updatecategory = $_POST['editcategory'];
$updateproduct = $_POST['editproduct'];
$updatesize = $_POST['editsize'];
$updateorder = $_POST['editorder'];
$updateprice = $_POST['editprice'];
$id = $_GET['id'];
$sql = "UPDATE price SET  brandid = '$updatebrand', categoryid = '$updatecategory', productid ='$updateproduct', sizeid ='$updatesize', orderid ='$updateorder', price ='$updateprice' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewprice.php'</script>";
}
// header("Location: viewclass.php");


?>