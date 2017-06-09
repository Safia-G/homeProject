<?php
  require_once("function/baseFunctions.php");
  $couleur = getAllColor();
  $taille = getAllTaille();
  $matiere = getAllMatiere();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Selections</title>
  </head>
  <body id="add">
    <form method="post" action="function/insert.php">
      <label>Choisir une couleur : </label>
      <select name="couleur" required="true">
        <?php
          foreach ($couleur as $value) {
            echo "<option value='" . $value['id'] . "'>" . $value['nomColor'] . "</option>";
          }
        ?>
      </select>

      <label>Selectionner la taille : </label>
      <select name="taille" required="true">
        <?php
          foreach ($taille as $value) {
            echo "<option value='" . $value['id'] . "'>" . $value['nomTaille'] . "</option>";
          }
        ?>
      </select>

      <label>Choisir la matière : </label>
      <select name="matiere" required="true">
        <?php
          foreach ($matiere as $value) {
            echo "<option value='" . $value['id'] . "'>" . $value['nomMatiere'] . "</option>";
          }
        ?>
      </select>

      <input type="submit" value="Valider les options">
      <img src="img/duck.gif" alt="" width="100px">

    </form>

  </body>
</html>
