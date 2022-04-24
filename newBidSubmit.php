<?php
session_start();

$dbh = new PDO("mysql:dbname=projetphp;host=localhost", "root", "");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_SESSION["user_id"])) {
        header("Location: login.php");
        die();
    }
    
    $bidPrice = (float) filter_var($_POST["bidPriceInput"], FILTER_SANITIZE_NUMBER_FLOAT);
    $idPost = (int) filter_var($_POST["idPost"], FILTER_SANITIZE_NUMBER_INT);
    $idUser = $_SESSION["user_id"];
    
    $bestAuctionQuery = $dbh->prepare("SELECT MAX(bidPrice) FROM auction WHERE carpost_id=?");
    $bestAuctionQuery->execute([$idPost]);
    $bestBid = $bestAuctionQuery->fetch();

    if(is_null($bestBid)) {
        $carpostQuery = $dbh->prepare("SELECT startPrice FROM carpost WHERE id=?");
        $carpostQuery->execute([$idPost]);
        $carpost = $carpostQuery->fetch();
        $basePrice = $carpost["startPrice"];
    } else {
        $basePrice = $bestBid["MAX(bidPrice)"];
    }

    if(is_null($bestBid) || $bidPrice > $basePrice) {

        $query = $dbh->prepare("INSERT INTO auction (bidPrice, carpost_id, user_id) VALUES (?, ?, ?);");

        $result = $query->execute([$bidPrice, $idPost, $idUser]);

        if ($result == true) {
            header("Location: PostDetails.php?id=" . $idPost);
        }
    }

}
?>

<body>

    <p>error try again, please bid higher</p>

</body>