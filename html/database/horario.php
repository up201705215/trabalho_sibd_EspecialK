<?php

function getAllMesas() {
  global $dbh;
  $stmt = $dbh->prepare('SELECT * FROM mesa');
  $stmt->execute();
  return $stmt->fetchAll();
}

function getMesaById($id) {
  global $dbh;
  $stmt = $dbh->prepare('SELECT * 
                         FROM mesa 
                         WHERE id = ?');
  $stmt->execute(array($id));
  return $stmt->fetch();
}
