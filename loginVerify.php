<?php
session_start();

$dbh = new PDO("mysql:dbname=projetphp;host=localhost", "root", "");


//check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['mailInput'], $_POST['passwordInput'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}

// Preparing to prevent SQL injection.
$query = $dbh->prepare('SELECT id, userPassword, lastname, firstname FROM users WHERE email = ?');
$query->execute([$_POST['mailInput']]);
$user = $query->fetch();

if ($user == false) {
    echo "<p>Email ou mot de passe incorrect</p>";
} else if (password_verify($_POST["passwordInput"], $user["userPassword"]) == true) {
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["user_firstname"] = $user["firstname"];
    $_SESSION["user_lastname"] = $user["lastname"];
    header("Location: DisplayCarPost.php");
} else {
    echo "<p>Email ou mot de passe incorrect</p>";
}
