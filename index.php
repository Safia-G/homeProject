<?php
  session_start();
  if($_SESSION['isConnected'] == True) {
    // Do nothing
  } else {
    header('Location: loginRegister.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon Canard</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="index">

<div class="header">
  <h1>Fans de canard, je vous souhaite la bienvenue chez moi !</h1>
  <img src="img/duck.gif" alt="" height="150px">

</div>

  <div class="texte">
    <p>Mon site est spécialisé dans la vente de canards.</p>
  <p>Quoi de plus mignon, de plus beau, de plus élégant, de plus intelligent qu'un canard ?</p>
  <p>Qu'il soit dur, mou, vivant, mort ou même réssuscité, un canard reste un canard.</p>
  <p>Avec toute la classe qu'il dégage, toute cette beauté qu'il incarne,</p>
  <p>Comment ne pas en vouloir un à la maison, prêt de vous ?</p>
  <p>Le canard entièrement customisable chez nous, peut s'installer n'importe où :</p>
  <p>Aussi bien dans votre chambre, dans votre salon, dans votre salle de bain ou même dans votre jardin.</p>
  <p>N'attendez plus c'est maintenant qu'il vous le faut !!</p>
  </div>
  <div class="creer">
    <button type="button" name="button"><a href="add.php">Je VEUX <br> mon canard ! </a></button>
  </div>
  <div class="disconnect">
    <a href="function/disconnect.php">Me déconnecter</a>
  </div>
    </ul>
  </body>
</html>
