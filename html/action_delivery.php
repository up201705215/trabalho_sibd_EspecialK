<?php
  require_once('config/init.php');
  require_once('database/user.php');

  require_once('database/delivery.php');

  $nome_delivery = $_POST['nome_delivery'];
  $hora = $_POST['hora'];
  $telefone = $_POST['telefone'];
  
  $username= $_SESSION['username'];

  $user=getprofile($username);

  insertDelivery($nome_delivery, $telefone, $hora);

  $entrega=getdelivery($nome_delivery);

  

  include('templates/header.php');
  include('templates/action_delivery.php');
  include('templates/footer.php');

?>