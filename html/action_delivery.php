<?php
  require_once('config/init.php');
  require_once('database/delivery.php');

  $nome_delivery = $_POST['nome_delivery'];
  $hora = $_POST['hora'];
  $telefone = $_POST['telefone'];
  

  insertDelivery($nome_delivery, $telefone, $hora);

  die(header('Location: list_categories.php'));
