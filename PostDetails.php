<?php

$id = $_GET["id"];

$dbh = new PDO("mysql:dbname=projetphp;host=127.0.0.1", "root", "");

$query = $dbh->prepare("SELECT c.*,  MAX(a.bidDate), MAX(a.bidPrice), u.firstname, u.lastname FROM carpost c LEFT JOIN auction a ON c.id=a.carpost_id LEFT JOIN users u ON a.user_id=u.id WHERE c.id=? GROUP BY c.id");
$query->execute([$id]);

$carpost = $query->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SudAuction|Details</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rochester"> 
 <link rel="Stylesheet" type="text/css" href="Postcardetails.css" />
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
     <div class="droite"><a href="DisplayCarPost.php">Go to posts</a></div>
     <div class="droite"><a href="index.php">Home</a></div>  
    <div class="droite"><a href="logout.php">log out</a></div>
     </div>
     </nav>
</header>

<div class="bkgrdimg">
<div class="detailspage">
<div class="postdetails">
<h1>Car Details</h1>
<p>Post ID - <?= $carpost["id"] ?> </p>
<p>Car Model: <?= $carpost["model"] ?></p>
<p>Car Brand: <?= $carpost["brand"] ?></p>
<p>Power Horse: <?= $carpost["horsePower"] ?></p>
<p>Year Model: <?= $carpost["carYear"] ?></p>
<p>Description: <?= $carpost["description"] ?></p>
<p>Start Price: <?= $carpost["startPrice"] ?></p>
<p>Pubished on: <?= $carpost["postDate"] ?></p>
<p>Biding end date: <?= $carpost["endDate"] ?></p>
</div>

<div class="bidingsection">
    <h1>Biding information</h1>
    <p>Last biding price: <?= $carpost["MAX(a.bidPrice)"] ?? 0 ?> (by <?= $carpost["firstname"]. " " .$carpost["lastname"] ?>)</p>
    <p>Last biding's date: <?= $carpost["MAX(a.bidDate)"] ?? "-" ?></p>
<?php 

if (date("Y-m-d") <= $carpost["endDate"]) {
    ?>
    
    <form action="newBidSubmit.php" method="POST">
        <input type="text" name="bidPriceInput" placeholder="Your bid...">
        <input type="hidden" name="idPost" value="<?= $carpost["id"] ?>" />
        <input type="submit" value="Submit">
    </form> 
</div>
</div>
    <?php
    } else {
        echo "Biding is closed";
}
?>
</div>
</body>
</html>