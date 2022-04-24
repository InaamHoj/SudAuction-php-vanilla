<link rel="stylesheet" href="style.css">
<!--------------------------------------------->
<div id="navLinkContainer">
<a class="navLink" href="DisplayCarPost.php">Go to posts</a>
    <a class="navLink" href="NewCarPostForm.php">Create new post</a>
    <a class="navLink" href="register.php">Home</a>
    <a class="navLink" href="LogIn.php">Login</a>
    <a class="navLink" href="logout.php">log out</a>
</div>
<hr>

<?php

$dbh = new PDO("mysql:dbname=projetphp;host=localhost", "root", "");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lastname = htmlspecialchars($_POST["lastnameInput"]);
    $firstname = htmlspecialchars($_POST["firstnameInput"]);
    $mail = htmlspecialchars($_POST["mailInput"]);
    $password = htmlspecialchars($_POST["passwordInput"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
}

$query = $dbh->prepare("INSERT INTO users (firstname, lastname, email, userPassword) VALUES (?,?,?,?)");

$query->execute([$firstname, $lastname, $mail, $hashed_password]);
?>

<body>
    <?php if ($query == true) { ?>
        <p>Thanks for the inscription</p>
    <?php } else { ?>
        <p>An error has occured</p>
    <?php } ?>

</body>