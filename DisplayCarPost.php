<?php

session_start();

$dbh = new PDO("mysql:dbname=projetphp;host=localhost", "root", "");

$query = $dbh->query("SELECT * FROM carpost");

$carpost = $query->fetchAll(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SudAuction|Posts</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rochester">  
 <link rel="stylesheet" href="DisplayCars.css">
</head>

<body>
<header>
<div class="containerfluid">
<nav class="navbar"> 
       <div class="col-3">
        <div class="gauche"><strong>SudAuction</strong></div>
      </div>

     <div class="col-9">
     <?php if (isset($_SESSION["user_id"])) { ?>
     <div class="droite"><a href="NewCarPostForm.php">Create new post</a></div>
     <?php }
  ?>
  <?php if (!isset($_SESSION["user_id"])) { ?>
    <div class="droite"><a href="logIn.php">Login</a></div>
    <div class="droite"><a href="register.php">Register</a></div>
    <?php }
    ?>
     <div class="droite"><a href="index.php">Home</a></div>  
    <div class="droite"><a href="logout.php">log out</a></div>
     </div>

     </nav>
</div>
</header>
<div class="bkgrdimg">

<?php if (isset($_SESSION["user_id"])) { ?>
  <br> <p>Welcome <?= $_SESSION["user_firstname"]; ?></p>
    
  <?php }
  ?>
<br><h1><u>ALL POSTS</u></h1>
<div class="container">

  <?php
  foreach ($carpost as $key => $carpost) { ?>
  <div class="carposts">
    <u><h1 id="postid">Post ID - <?= $carpost["id"] ?> </h1></u>
    <h3>Car Brand: <?= $carpost["brand"] ?></h3>
    <h3>Car Model: <?= $carpost["model"] ?></h3>
    <strong><h3>Start Price: <?= $carpost["startPrice"] ?></h3></strong>
    <h3>Pubished on: <?= $carpost["postDate"] ?></h3>
    <h3>Biding end date: <?= $carpost["endDate"] ?></h3>
    <strong><a href="PostDetails.php?id=<?= $carpost["id"]; ?>">(Details)</a></strong>
  </div>

  <?php } ?> 
  </div>
  </div>
</body>

</html>