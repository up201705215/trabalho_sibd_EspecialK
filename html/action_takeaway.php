<?php
  require_once('config/init.php');
  require_once('database/order.php');
  require_once('database/mesa.php');
  

  if (!isset($_SESSION['username'])) {
    $_SESSION['message'] = 'You must login first!';
    die(header('Location: ' . $_SERVER['HTTP_REFERER']));
  }

  $order_id = insertHora($_SESSION['username']);  


  $data=$_GET['data']


 


//   if ($_POST['checkout_type'] == "1") { // Restaurant
//     $_SESSION['message'] = 'Products ordered!';
//     die(header('Location: a_t.php'));
//   }
//   if ($_POST['checkout_type'] == "2") { // Delivery
//     $_SESSION['message'] = 'A que hoje deseja receber o pedido?';

//   }
//   if ($_POST['checkout_type'] == "3") { // Takeway
//     $_SESSION['message'] = 'A que horas deseja receber o seu pedido?';
//     die(header('Location: takeaway.php'));
//   }

//   header('Location: ' . $_SERVER['HTTP_REFERER']);
?>