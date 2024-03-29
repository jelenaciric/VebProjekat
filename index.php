<?php
  session_start();
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width", initial-scale="1.0">
  <title>Sephora</title>
  
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
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark bg-dark" >
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span style="color:white" class="glyphicon glyphicon-th"></span>
              </button>
            <a class="navbar-brand" href="index.php">Sephora</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"> <span class="glyphicon glyphicon-home	
              "></span> Home</a></li>
            <li><a href="#aboutus"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
            <li><a href="shop.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shop</a></li>
            <li><a href="#contact"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
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

  <div class="slika1">
    <div class="paratext">
      <span class="border">
        Sephora
      </span>
    </div>
  </div>

  <section class="kutija kutija-light" id="aboutus">
    <h2>About us</h2>
    <p>
      Sephora is a leader in global prestige retail, teaching and inspiring clients to play in a world of beauty. Owned by LVMH Moët Hennessy Louis Vuitton, the world's leading luxury goods group, Sephora has earned its reputation as a beauty trailblazer with its expertise, innovation, and entrepreneurial spirit.
      <br>
      At Sephora, beauty is in our DNA. Our revolutionary beauty-retail concept, founded in France by Dominique Mandonnaud in 1970, is defined by its unique, open-sell environment with an ever-increasing assortment of products from carefully curated brands, featuring indie darlings, emerging favorites, trusted classics, and Sephora’s own, SEPHORA COLLECTION. Today, Sephora is not only the leading retailer of perfume and cosmetics stores in France, but also a powerful beauty presence in countries around the world thanks to its unparalleled assortment of prestige products in every category, unbiased service from experts, interactive shopping environment, and innovation.
      <br>
      Sephora believes every stroke, swipe and dab reveals possibility, and we share our client’s love for the confidence that our products, services, and expertise brings to their life every day. In every store, clients unlock their beauty potential at our Beauty, Skincare and Fragrance Studios through intuitive technology and guidance from the most knowledgeable and professional team of product consultants in the beauty industry.
    </p>
  </section>

  <div class="slika2">
    <div class="paratext">
      <span class="border">
        Shop
      </span>
    </div>
  </div>

  <section class="kutija kutija-dark">
    <h2>Shop</h2>
    <p>
      Sephora operates over 2,500 stores in 32 countries worldwide, with an expanding base of over 460 stores across the Americas. Sephora opened its first U.S. store in New York’s Soho neighborhood in 1998, and its first Canadian store in Toronto in 2004. The Sephora Americas headquarters and Innovation Lab are located in San Francisco, with corporate offices in New York, Mexico City, Montreal, Toronto and São Paolo.
    </p>
  </section>

  <div class="slika3">
    <div class="paratext">
      <span class="border">
        Contact Us
      </span>
    </div>
  </div>

  <section class="kutija kutija-dark" id="contact">
    <h2>Contact</h2>
    <p>
      Address:<br>
      Sephora USA, Inc.<br>
      First Market Tower<br>
      525 Market Street, 32nd Floor<br>
      San Francisco, CA 94105<br>
      <br>
      Phone:<br>
      (1-877-737-4672)<br>
      <br>
      Email:<br>
      <a href="#contact">sephora@gmail.com</a><br>
    </p>
  </section>
</body>
</html>
