<?php

require_once "../connection.php";
$updatebrand = $_POST['editbrandname'];


$id = $_GET['id'];
$sql = "UPDATE brand SET  brandname = '$updatebrand' WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo mysqli_error($conn);
}
else{
    echo "<script>window.location='viewbrand.php'</script>";
}



?>