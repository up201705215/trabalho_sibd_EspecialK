<?php
  require_once('config/init.php');

  require_once('database/category.php');
  require_once('database/product.php');

  $id = $_GET['id'];
  
  if (isset($_GET['name']) && isset($_GET['min']) && isset($_GET['max'])) {
    $name = $_GET['name'];
    $min = $_GET['min'];
    $max = $_GET['max'];  
  }

    if (!isset($id))
    die(header('Location: list_categories.php'));

  $category = getCategoryById($id);

  if (!$category)
    die(header('Location: list_categories.php'));

  if (isset($name) && isset($min) && isset($max))
    $products = getProductsBySearch($id, $name, $min, $max);
  else
    $products = getProductsByCategory($id, $page);

  include('templates/header.php');
  include('templates/list_products.php');
  include('templates/footer.php');
