<?php

  $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');

  $newDuck = $db->prepare('INSERT INTO `ducks`.`ducks` (`couleur`, `taille`, `matiere`) VALUES (:couleur, :taille, :matiere)');
  $newDuck->bindParam(':couleur', $_POST['couleur']);
  $newDuck->bindParam(':taille', $_POST['taille']);
  $newDuck->bindParam(':matiere', $_POST['matiere']);
  $newDuck->execute();
  header('Location: ../list.php');

?>
