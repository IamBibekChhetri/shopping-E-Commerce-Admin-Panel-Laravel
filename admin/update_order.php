<?php

require_once "../connection.php";
$updatebrand = $_POST['editbrand'];
$updatecategory = $_POST['editcategory'];
$updateproduct = $_POST['editproduct'];
$updateorder = $_POST['editorder'];
$id = $_GET['id'];
$sql = "UPDATE order_table SET  brandid = '$updatebrand', categoryid = '$updatecategory', productid ='$updateproduct', ordername ='$updateorder' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='vieworder.php'</script>";
}
// header("Location: viewclass.php");


?>