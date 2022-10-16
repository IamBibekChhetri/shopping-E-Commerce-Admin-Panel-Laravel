<?php
require_once "../connection.php";
$brandname = $_POST['brandname'];
$status = $_POST['status'];
$sql = "insert into brand (brandname, status) values('$brandname', '$status')";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location: viewbrand.php");
}
else{
    echo "<script>alert('Error')</script>";
}

?>