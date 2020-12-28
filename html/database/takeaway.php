<?php
 function insertTakeaway($nome_takeaway, $hora_takeaway) {
  global $dbh;
  $stmt = $dbh->prepare('INSERT INTO delivery (nome_takeaway, hora_takeaway) VALUES(?, ?)');
  $stmt->execute(array($nome_takeaway,  $hora_takeaway));
  //return $dbh->lastInsertId('orders_id_seq');
}
