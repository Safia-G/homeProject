<?php
  function getAllItems()
  {
    $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');
    $duck = $db->prepare(
      'SELECT ducks.id, color.nomColor as ducksColor, taille.nomTaille as ducksTaille , matiere.nomMatiere as ducksMatiere
FROM ducks, color, ducks_color, taille, matiere
WHERE ducks.couleur = ducks_color.id_duck
AND color.id = ducks_color.id_color
AND ducks.taille = taille.id
AND ducks.matiere = matiere.id');
    $duck->execute();
    return $duck->fetchAll();
  }
  function getAllColor()
  {
    $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');
    $duck = $db->prepare('SELECT * FROM color');
    $duck->execute();
    return $duck->fetchAll();
  }
  function getAllTaille()
  {
    $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');
    $duck = $db->prepare('SELECT * FROM taille');
    $duck->execute();
    return $duck->fetchAll();
  }
  function getAllMatiere()
  {
    $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');
    $duck = $db->prepare('SELECT * FROM matiere');
    $duck->execute();
    return $duck->fetchAll();
  }
  function insertMyDuck($duckData)
  {
    $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');

    $duck = $db->prepare('SELECT * FROM users WHERE username = :username');
    $duck->bindParam(':username', $duckData['username']);
    $duck->execute();
    // Prepare insertion of new game
    $newDuck = $db->prepare('INSERT INTO ducks (`couleur`, `taille`, `matiere`) VALUES (:couleur, :taille, :matiere)');
    $newDuck->bindParam(':couleur', $duckData['couleur']);
    $newDuck->bindParam(':taille', $duckData['taille']);
    $newDuck->bindParam(':matiere', $duckData['matiere']);
    $newDuck->execute();
  }

  function deleteMyDuck($deleteDuck)
  {
    $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');
    $deleteDuck = $db->prepare('DELETE FROM `ducks`.`ducks` WHERE `id`= :toDelete;');
    $deleteDuck->bindParam(':toDelete', $_POST['duck_to_delete']);
    $deleteDuck->execute();
  }
  function updateMyDuck($updateDuck)
  {
    $db = new PDO('mysql:host=localhost;dbname=ducks', 'root', '0000');
    $updateDuck = $db->prepare('DELETE FROM `ducks`.`ducks` WHERE `id`= :toDelete;');
    $updateDuck->bindParam(':toDelete', $_POST['duck_to_update']);
    $updateDuck->execute();
  }
?>
