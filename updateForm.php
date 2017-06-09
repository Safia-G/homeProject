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
    <form method="post" action="function/update.php">
      <label>Selectionner une couleur : </label>
      <select name="couleur" required="true">
        <?php
          foreach ($couleur as $value) {
            echo "<option value='" . $value['id'] . "'>" . $value['nomColor'] . "</option>";
          }
        ?>
      </select>

      <label>Selectionner la Taille : </label>
      <select name="taille" required="true">
        <?php
          foreach ($taille as $value) {
            echo "<option value='" . $value['id'] . "'>" . $value['nomTaille'] . "</option>";
          }
        ?>
      </select>

      <label>Selectionner la Matière : </label>
      <select name="matiere" required="true">
        <?php
          foreach ($matiere as $value) {
            echo "<option value='" . $value['id'] . "'>" . $value['nomMatiere'] . "</option>";
          }
        ?>
      </select>

      <input type="submit" value="Enregistrer mes modifications">
    </form>

  </body>
</html>
