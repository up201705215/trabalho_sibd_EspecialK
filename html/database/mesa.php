<?php

function getAllMesas() {
  global $dbh;
  $stmt = $dbh->prepare('SELECT * FROM mesa');
  $stmt->execute();
  return $stmt->fetchAll();
}

function getMesaByCapacity($quantidade_mesa) {
  global $dbh;
  $stmt = $dbh->prepare('SELECT * 
                         FROM mesa 
                         WHERE capacidade >= ?');
  $stmt->execute(array($quantidade_mesa));
  return $stmt->fetchAll();
}
