<?php
function insertDelivery($nome_delivery, $telefone, $hora)
{
  global $dbh;
  $stmt = $dbh->prepare('INSERT INTO delivery (nome_delivery, telefone, hora) VALUES(?, ?, ?)');
  $stmt->execute(array($nome_delivery, $telefone, $hora));
  //return $dbh->lastInsertId('orders_id_seq');
}

function getdelivery($nome_delivery)
{
  global $dbh;

  $stmt = $dbh->prepare('SELECT * FROM delivery WHERE nome_delivery = ?');
  $stmt->execute(array($nome_delivery));

  $entrega = $stmt->fetch();

  return $entrega;
}

  // function insertOrderLine($order_id, $prod_id, $quantity) {
  //   global $dbh;
  //   $stmt = $dbh->prepare('INSERT INTO order_line VALUES(?, ?, ?)');
  //   $stmt->execute(array($order_id, $prod_id, $quantity));
  // }
