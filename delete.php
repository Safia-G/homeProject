<?php
require_once("function/baseFunctions.php");
$duck = getAllItems();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Supprimer ma commande</title>
  </head>
  <body>
    <form method="post" action="function/deleteData.php">
      <label for="">Id du canard a supprimer : </label>
      <select name="duck_to_delete">
        <?php
          foreach ($duck as $value) {
            echo "<option value='" . $value['id'] . "'>" . $value['id'] . "</option>";
          }
        ?>
      </select>
      <input type="submit" value="Supprimer">
    </form>
  </body>
</html>
