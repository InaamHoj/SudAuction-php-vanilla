<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SudAuction|Register</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="Stylesheet" type="text/css" href="register.css" />
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
          <div class="droite"><a href="logIn.php">Login</a></div>
          <div class="droite"><a href="DisplayCarPost.php">Go to posts</a></div>
        </div>

        </nav>
  </div>
</header>

  <div class="maincontainer">
    <div class="imgcontainer" >
    <img class="img" src="pic3.jpeg">
</div>
    <div class="registerform">
      <h3 id="connexion">REGISTER</h3>
      <form action="newUserSubmit.php" method="POST">
      <i class="fas fa-user">&nbsp;</i>
        <input
          type="text"
          name="lastnameInput"
          id="inputs"
          placeholder="Nom"
        />
        <br /><br />
        <i class="fas fa-user">&nbsp;</i>
        <input
          type="text"
          name="firstnameInput"
          id="inputs"
          placeholder="Prenom"
        />
        <br /><br />
        <i class="fas fa-at">&nbsp;</i>
        <input
          type="text"
          name="mailInput"
          id="inputs"
          placeholder="Adresse Mail"
        />
        <br /><br />
        <i class="fas fa-lock">&nbsp;</i>
        <input
          type="text"
          name="passwordInput"
          id="inputs"
          placeholder="Mot de passe"
        />
        <br /><br /><a class="navLink" href="LogIn.php">Login</a>
        <br /><br />
        <input id="submit" type="submit" value="Register" /><br><br>
        <p style=color:white>By clicking Register, you agree to our Terms and Conditions.</p>
      </form>
    </div>
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
