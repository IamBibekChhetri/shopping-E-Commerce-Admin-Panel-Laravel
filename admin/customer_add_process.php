<?php
require_once "../connection.php";
$customername = $_POST['customername'];
$address = $_POST['address'];
$customerphone = $_POST['phone'];
$customeremail = $_POST['email'];
$customerpassword = $_POST['password'];
$mdcustomerpassword = md5($customerpassword);
$customerpic = $_FILES['customerpic']['name'];
$customerpicTmp = $_FILES['customerpic']['tmp_name'];
$directory = "img/".$customerpic;
$age = $_POST['age'];
$status = $_POST['status'];



$sql = "INSERT INTO customer (customername, address, phone, age, email, password, customerpic, status) values('$customername', '$address', '$customerphone', '$age', '$customeremail', '$mdcustomerpassword', '$customerpic', '$status')";
$query = mysqli_query($conn,$sql);

if($query){
    move_uploaded_file($customerpicTmp, $directory);
    echo "<script>alert('customer add successfully');
    </script>";
}
else{
    echo "<script>alert('Error')</script>";
}
header("Location: viewproduct.php");
?>