<?php
  $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');
  $deleteDuck = $db->prepare('DELETE FROM `ducks`.`ducks` WHERE `id`= :toDelete;');
  $deleteDuck->bindParam(':toDelete', $_POST['duck_to_delete']);
  $deleteDuck->execute();

header('Location: ../list.php');
?>
