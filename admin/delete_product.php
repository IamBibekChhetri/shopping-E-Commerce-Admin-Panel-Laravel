<?php

require_once "../connection.php";




$id = $_GET['id'];
$sql =  "DELETE FROM products  WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewproduct.php'</script>";
}
// header("Location: viewclass.php");


?>