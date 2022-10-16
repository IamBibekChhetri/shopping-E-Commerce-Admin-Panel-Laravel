<?php

require_once "../connection.php";
$updatebrand = $_POST['selectbrand'];
$updatecategory = $_POST['editcategory'];


$id = $_GET['id'];
$sql = "UPDATE category SET  brandid = '$updatebrand', categoryname = '$updatecategory' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewcategory.php'</script>";
}
// header("Location: viewclass.php");


?>