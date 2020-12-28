<?php
  require_once('config/init.php');

  $id = $_POST['id'];
  $quantity = $_POST['quantity'];

  $_SESSION['cart'][$id] = $quantity - 1; 

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>