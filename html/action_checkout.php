<?php
require_once('config/init.php');
require_once('database/order.php');

if (!isset($_SESSION['username'])) {
  $_SESSION['message'] = 'You must login first!';
  die(header('Location: ' . $_SERVER['HTTP_REFERER']));
}

$order_id = insertOrder($_SESSION['username']);

foreach ($_SESSION['cart'] as $prod_id => $quantity) {
  insertOrderLine($order_id, $prod_id, $quantity);
}

unset($_SESSION['cart']);

if ($_POST['checkout_type'] == "1") { // Restaurant

  die(header('Location: a_t.php'));
}
if ($_POST['checkout_type'] == "2") { // Delivery
  $_SESSION['message'] = 'A que hoje deseja receber o pedido?';
  die(header('Location: delivery.php'));
}
if ($_POST['checkout_type'] == "3") { // Takeway
  die(header('Location: takeaway.php'));
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
