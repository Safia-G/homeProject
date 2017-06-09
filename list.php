<?php
  require_once("function/baseFunctions.php");
  insertMyDuck($_POST);
  deleteMyDuck($_POST);
  $newDuck = insertMyDuck($_POST);
  $deleteDuck = deleteMyDuck($_POST);
  $duck = getAllItems();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body id="liste">

<ul>
  <li><a href="/">Accueil</a></li>
</ul>

    <h1>Récapitulatif de votre commande</h1>
    <table id="list-table">
      <tr>
        <th>Couleur</th>
        <th>Taille</th>
        <th>Matière</th>
      </tr>
      <?php
        foreach($duck as $value) {
          echo "<tr>";
          echo "<td>" . $value['ducksColor'] . "</td>";
          echo "<td>" . $value['ducksTaille'] . "</td>";
          echo "<td>" . $value['ducksMatiere'] . "</td>";
          echo "</tr>";
        }
      ?>
    </table>

    <ul class="menu">
      <li><a href="delete.php">Supprimer</a></li>
      <li><a href="updateForm.php">Modifier ma commande</a></li>
    </ul>
  </body>
</html>
