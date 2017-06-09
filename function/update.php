<?php
  $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');
  // Recupere tout le contenu de tout les jeux
  $duck = $db->prepare('UPDATE ducks.ducks
    SET couleur = :couleur,
    taille = :taille,
    matiere = :matiere,
    WHERE id = :id');
  $duck->bindParam(':couleur', $_POST['couleur']);
  $duck->bindParam(':taille', $_POST['taille']);
  $duck->bindParam(':matiere', $_POST['matiere']);
  $duck->bindParam(':id', $_POST['id']);
  $duck->execute();
  header('Location: ../list.php');
?>
