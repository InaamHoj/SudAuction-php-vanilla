<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SudAuction|Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rochester"> 
 <link rel="Stylesheet" type="text/css" href="loginpage.css" />
</head>


<body>
    <header>
<div class="containerfluid">
<nav class="navbar"> 
       <div class="col-3">
        <div class="gauche"><strong>SudAuction</strong></div>
      </div>

     <div class="col-9">
       <div class="droite"><a href="index.php">Home</a></div>
       <div class="droite"><a href="register.php">Register</a></div>
       <div class="droite"><a href="DisplayCarPost.php">Go to posts</a></div>
     </div>

     </nav>
</div>
</header>
<div class="maincontainer">
    <div class="imgcontainer" >
    <img class="img" src="pic3.jpeg">
</div>
    <div class="loginform">
        <h3 id="connexion">LOGIN</h3>
        <form action="loginVerify.php" method="POST">
        <i class="fas fa-at">&nbsp;</i>
            <input type="text" name="mailInput" id="inputs" placeholder="Your Mail" /> <br> <br>
            <i class="fas fa-lock">&nbsp;</i>
            <input type="text" name="passwordInput" id="inputs" placeholder="Password" />
            <br /><br /><a class="navLink" href="register.php">Register</a>
        <br /><br />
            <input id="submit" type="submit" value="Login"/> <br><br>
        </form>
    </div>

    <footer>
<div class="containerfluid">
<nav class="navbarfoot"> 
       <div class="col-4">
        <div class="gauche">&copy;Copyright2022 SudAuction. All Rights Reserved</div>
      </div>

     <div class="col-8">
       <div class="droite">Terms & Conditions</div>
       <div class="droite">Site Map</div>
       <div class="droite">Privacy Policy</div>
       <div class="droite">Contact-us</div>
     </div>

     </nav>
</div>
</footer>
</body>

</html>