<?php
require_once "../connection.php";
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$conformpassword = $_POST['confpassword'];
$mdpassword = md5($password);


$sql = "INSERT INTO user (name, email, address, phone, password) values('$fullname','$email', '$address', '$phone', '$mdpassword')";

if($_POST['password']!=$_POST['confpassword']){
    echo "<script>alert('Password did not match')</script>";
    header("Location: adminsignup.php");
} else{
    $query = mysqli_query($conn,$sql);
    if($query){
    echo "<script>alert('signup add successfully');
    </script>";
    header("Location: adminlogin.php");
}
else{
    echo "<script>alert('Error')</script>";
}

}
?>