<?php
  require_once('config/init.php');
  require_once('database/takeaway.php');

  $nome_takeaway = $_POST['nome_takeaway'];
  $hora_takeaway = $_POST['hora_takeaway'];
  

  insertTakeaway($nome_takeaway, $hora_takeaway);

  die(header('Location: list_categories.php'));
