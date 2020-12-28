<?php
   function insertHora($horario_mesa) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO horario_mesa (timestart) VALUES(?)');
    $stmt->execute(array(time(), $horario_mesa));
  }

?>