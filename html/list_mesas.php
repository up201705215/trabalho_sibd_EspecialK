<?php
  require_once('config/init.php');
  require_once('database/mesa.php');

  $quantidade_mesa = $_GET['quantidade_mesa'];

  if (isset($quantidade_mesa))
    $mesas = getMesaByCapacity($quantidade_mesa);
  else
    $mesas = getAllMesas();



  include('templates/header.php');
  include('templates/list_mesas.php');
  include('templates/footer.php');
