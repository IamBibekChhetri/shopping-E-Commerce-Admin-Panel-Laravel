<?php

require_once "../connection.php";
$customername = $_POST['customername'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$customerpic = $_FILES['customerpic']['name'];


$id = $_GET['id'];


if($customerpic){
    $customerpicTmp = $_FILES['customerpic']['tmp_name'];
    $directory = "img/".$customerpic;

    $sql = "UPDATE customer SET  customername = '$customername', address = '$address', email = '$email', phone ='$phone', age ='$age', gender ='$gender', customerpic = '$customerpic'  WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
if($result){
    move_uploaded_file($customerpicTmp, $directory);
    header("Location: viewcustomer.php");
}
}
else{
    $sql = "UPDATE customer SET  customername = '$customername', address = '$address', email = '$email', phone ='$phone', age ='$age', gender ='$gender'  WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        header("Location: viewcustomer.php");

    }
}

?>