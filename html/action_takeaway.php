<?php
  require_once('config/init.php');
  require_once('database/user.php');
  require_once('database/takeaway.php');

  $nome_takeaway = $_POST['nome_takeaway'];
  $hora_takeaway = $_POST['hora_takeaway'];
  
  $username= $_SESSION['username'];

  $user=getprofile($username);
   
  
  insertTakeaway($nome_takeaway, $hora_takeaway);

  $buscar=gettakeaway($nome_takeaway);

  
  include('templates/header.php');
  include('templates/action_takeaway.php');
  include('templates/footer.php');
