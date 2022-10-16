<?php

require_once "../connection.php";
$updatebrand = $_POST['editbrand'];
$updatecategory = $_POST['editcategory'];
$updateproduct = $_POST['editproduct'];
$updatesize = $_POST['editsize'];
$id = $_GET['id'];
$sql = "UPDATE size SET  brandid = '$updatebrand', categoryid = '$updatecategory', productid ='$updateproduct', size ='$updatesize' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewsize.php'</script>";
}
// header("Location: viewclass.php");


?>