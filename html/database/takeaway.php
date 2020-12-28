<?php
 function insertTakeaway($nome_takeaway, $hora_takeaway) {
  global $dbh;
  $stmt = $dbh->prepare('INSERT INTO takeaway (nome_takeaway, hora_takeaway) VALUES(?, ?)');
  $stmt->execute(array($nome_takeaway,  $hora_takeaway));
  //return $dbh->lastInsertId('orders_id_seq');
}

function gettakeaway($nome_takeaway) {
  global $dbh;
  
  $stmt = $dbh->prepare('SELECT * FROM takeaway WHERE nome_takeaway = ?');
  $stmt->execute(array($nome_takeaway));

  $buscar = $stmt->fetch();

  return $buscar;
}
?>