<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Toi aussi tu est fan de canards, inscris toi ou connecte toi !</h1>

  <div class="bloc">

    <div class="bloc1">
      <h2>Me connecter</h2>
      <form method="post" action="function/login.php">
        <!-- <label for="username">Veuillez entrer votre nom d'utilisateur : </label> -->
        <input type="text" name="username" placeholder="Nom d'utilisateur" required="true">

        <!-- <label for="password">Quel est votre mot de passe ? </label> -->
        <input type="password" name="password" placeholder="Mot de passe" required="true">

        <input type="submit" value="Accéder au site">
      </form>
    </div>
    <img src="img/couple.jpg" alt="" height="300px">
    <div class="bloc2">
      <h2>Créer un compte</h2>
      <form method="post" action="function/register.php">
        <!--<label for="username">User : </label> -->
        <input type="text" name="username" placeholder="Nom d'utilisateur" required="true">

        <!--<label for="password">Password : </label> -->
        <input type="password" name="password" placeholder="Mot de passe" required="true">

        <input type="submit" value="Créer mon compte">
      </form>
    </div>
   </div>
  </body>
</html>
