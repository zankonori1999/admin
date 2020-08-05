<?php
    include_once '../include/user_functions.php';
    if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        $data['username'] = $_COOKIE['username'];
        $data['password'] = $_COOKIE['password'];
        user_login($data);
    }
    if(isset($_POST['Enter'])){
        $data=$_POST['data'];
        user_login($data);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
 	 <img src="img/logo.png" width="150" height="150" alt="" class="academyitLogo"/>

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="نام کاربری" name="data[username]" autofocus>
            <input type="password" class="form-control" name="data[password]" placeholder="کلمه عبور">
            <label class="checkbox">
                <input type="checkbox" value="remember-me" name="data[rememberMe]"> مرا به خاطر بسپار
                <br />
                <br />
                <span class="pull-right"> <a href="#"> کلمه عبور را فراموش کرده اید؟</a></span>
            </label>
            <br />
            <br />
            <button class="btn btn-lg btn-login btn-block" type="submit" name="Enter">ورود</button>
        </div>

      </form>

    </div>


  </body>
</html>
