<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SudAuction|NewPost</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rochester"> 
 <link rel="Stylesheet" type="text/css" href="Newpostsform.css" />
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
       <div class="droite"><a href="DisplayCarPost.php">Go to posts</a></div>
       <div class="droite"><a href="index.php">Logout</a></div>
     </div>
     </nav>
</header>
<div class="maincontainer">
    <div class="imgcontainer" >
    <img class="img" src="pic5.jpg">
</div>
    <div class="newpostform">
        <h2 id="newposttitle">CREATE A NEW POST</h2>
        <br>
        <form action="carpostinfo.php" method="POST">
        <i class='fas fa-car-alt'>&nbsp;&nbsp;</i>
            <input id="newpostinput" type="text" name="modelInput" placeholder="Model..."><br /><br />
        <i class='fas fa-angle-double-up'style='font-size:20px'>&nbsp;&nbsp;</i>
            <input id="newpostinput"  type="text" name="brandInput" placeholder="Brand..."><br /><br />
        <i class='fas fa-horse'>&nbsp;&nbsp;</i>
            <input id="newpostinput"  type="text" name="hpInput" placeholder="Horse power..."><br /><br />
        <i class='far fa-calendar' style=color:white>&nbsp;&nbsp;</i>
            <input id="newpostinput"  type="text" name="yearInput" placeholder="Year..."><br /><br />
        <i class='fas fa-pen'>&nbsp;&nbsp;</i>
            <input id="newpostinput"  type="text" name="descriptionInput" placeholder="Description..."><br /><br />
        <i class='fas fa-money-bill-wave'>&nbsp;&nbsp;</i>
            <input id="newpostinput"  type="number" name="startPriceInput" placeholder="Starting price..."><br /><br />
        <i class='far fa-calendar-alt'style=color:white>&nbsp;&nbsp;</i>
            <input id="newpostinput"  type="date" name="endDateInput"><br /><br /><br />
            <input type="submit" name="submit" value="create" id="submit"><br><br>
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