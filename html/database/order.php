<?php
function insertOrder($username)
{
  global $dbh;
  $stmt = $dbh->prepare('INSERT INTO orders (date, username) VALUES(?, ?)');
  $stmt->execute(array(time(), $username));
  return $dbh->lastInsertId('orders_id_seq');
}

function insertOrderLine($order_id, $prod_id, $quantity)
{
  global $dbh;
  $stmt = $dbh->prepare('INSERT INTO order_line VALUES(?, ?, ?)');
  $stmt->execute(array($order_id, $prod_id, $quantity));
}
