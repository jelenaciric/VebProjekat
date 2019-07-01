<?php
  session_start();
  $connection = mysqli_connect('localhost', 'root', '', 'projekat');

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sephora-Shop</title>
  
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.css.map" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css.map" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css.map" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css.map" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
            <li><a href="index.php"> <span class="glyphicon glyphicon-home	
              "></span> Home</a></li>
            <li class="active"><a href="shop.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shop</a></li>
          </ul>

          <?php if(!isset($_SESSION['username'])) : ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
          <?php endif ?>
          <?php if(isset($_SESSION['username'])) : ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a><span class='glyphicon glyphicon-user'></span><?php echo $_SESSION['username']; ?></a></li>
              <?php if($_SESSION['username']=="admin") : ?>
                <li><a href='admin.php'><span class='glyphicon glyphicon-wrench'></span>Settings</a></li>
              <?php endif ?>
              <li><a href="index.php?logout='1'"><span class='glyphicon glyphicon-log-out'></span>LogOut</a></li>
            </ul>
          <?php endif ?>
          
        </div>
      </div>
    </nav>

    <?php $results = mysqli_query($connection, "SELECT * FROM artikli"); ?>

    <div class="container">

      <div class="row">

          <div class="col-md-offset-2 col-md-8">

              </div>
              <?php $incre=1; while ($row = mysqli_fetch_array($results)) { ?>
              <?php if($incre==3) { ?>
              <div class="row">
              <?php } ?>
                  <div class="col-sm-4 col-lg-4 col-md-4">
                      <div class="thumbnail">
                          <img class="simg" src="images/<?php echo $row['item_image']; ?>" alt="">
                          <div class="caption">
                              <h4 class="pull-right">RSD<?php echo $row['item_price']; ?></h4>
                              <h4><a href="#"><?php echo $row['item_name']; ?></a>
                              </h4>
                              <p><?php echo $row['item_text']; ?></p>
                              <button style="margin:auto; display:block;">Buy</button>
                          </div>
                      </div>
                  </div>
                <?php if($incre==3) { ?>
              </div>
              <?php } $incre=$incre+1;?>
              <?php } ?>

          </div>

      </div>
      
  </body>

</html>