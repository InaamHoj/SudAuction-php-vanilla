<?php
$dbh = new PDO("mysql:dbname=projetphp;host=localhost", "root", "");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carmodel = htmlspecialchars($_POST["modelInput"]);
    $carbrand = htmlspecialchars($_POST["brandInput"]);
    $horsepower = htmlspecialchars($_POST["hpInput"]);
    $yearmodel = htmlspecialchars($_POST["yearInput"]);
    $description = htmlspecialchars($_POST["descriptionInput"]);
    $startprice = htmlspecialchars($_POST["startPriceInput"]);
    $enddate = htmlspecialchars($_POST["endDateInput"]);
}
$query = $dbh->prepare("INSERT INTO carpost (model, brand, horsePower, carYear, description, startPrice, endDate) VALUES (?,?,?,?,?,?,?)");

$query->execute([$carmodel, $carbrand, $horsepower, $yearmodel, $description, $startprice, $enddate]);
?>

<body>
    <?php if ($query == true) { ?>
        <p id="thx"> ✓ Thank you for the information provided, your post will be published soon!</p>
    <?php

    } else { ?>
        <p id="thx">✗ An error has occured</p>
    <?php }
    ?>
</body>