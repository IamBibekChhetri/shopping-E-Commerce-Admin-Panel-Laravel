<?php
session_start();
if(isset($_SESSION['is_logged_in'])){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sasto shopping</title>
    <!-- ---------- icon -----------  -->
    <link rel="icon" href="../img/favicon.png"> 
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
        <div class="card-body p-3">
            <div class="col-md-12 col-md-offset-6">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login_add.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Email..." name="email" type="email" required>
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Password..." id="password" type="password"  name="password" required>
                                </div>
                                
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                  <!-- Change this to a button or input when using this as a form -->
                                  <td class="center"><button type="submit" class="btn btn-success">Log-In</button>
                                            <a href="adminsignup.php" class ="btn btn-primary">Sign-Up</a></td>
                                        </fieldset>
                                        
                                
                            <br><a href="forgetpassword.php">Forget Password</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function matchPassword(){
            var password = document.getElementById("password");
            var cpassword = document.getElementById("confpassword");
            if(password!=cpassword){
                alert("Password did not match");
            }
            
        }

    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>