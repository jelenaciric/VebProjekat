<?php include('backend.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
        body, html{
            color:rgb(0, 0, 0);
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span style="color:white" class="glyphicon glyphicon-th"></span>
                    </button>
                <a class="navbar-brand" href="index.php">Sephora</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="shop.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shop</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="col-lg-7 col-lg-offset-4">
            <form action="login.php" method="POST">
                <div id="error"></div>
                <div id="error"></div>
                <div class="form-group">
                    <label for='username'>Username</label>
                    <br>
                    <input id='username' placeholder="Enter Username" type="text" required name="username">
                </div>
                <div class="form-group">
                    <label for='password'>Password</label>
                    <br>
                    <input id='password' placeholder="Enter Password" type="password" required name="password">
                </div>
                <div>
                    <input id="submit_button" name = "login_confirm" type="submit" value="Log in" >
                </div>
            </form>
            </div>
        </div>
    </body>
</html>