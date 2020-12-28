<?php
  require_once('config/init.php');
  require_once('database/mesa.php');

  $mesas = getAllMesas();

  include('templates/header.php');
  include('templates/list_mesas.php');
  include('templates/footer.php');
?>