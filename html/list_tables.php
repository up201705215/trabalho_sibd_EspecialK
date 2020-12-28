<?php
  require_once('config/init.php');
  require_once('database/product.php');

  if (!isset($_SESSION['cart']))
    $_SESSION['cart'] = array();

  $products = array();

  foreach ($_SESSION['cart'] as $id => $quantity) {
    $product = getProductById($id);
    $product['quantity'] = $quantity;
    $products[] = $product;
  }

  include('templates/header.php');
  include('templates/list_tables.php');
  include('templates/footer.php');
