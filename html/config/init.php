<?php
  session_start();

  // init database first: sqlite3 -init products.sql products.db
  $dbh = new PDO('sqlite:./sql/products.db');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  function cartSize() {
    if (!isset($_SESSION['cart'])) return 0;
    $count = 0;
    foreach($_SESSION['cart'] as $quantity)
      $count += $quantity;
    return $count;
  }

  if (isset($_SESSION['message'])) {
    $_MESSAGE = $_SESSION['message'];
    unset($_SESSION['message']);  
  }
?>
