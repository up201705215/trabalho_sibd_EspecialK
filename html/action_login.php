<?php
  require_once('config/init.php');
  require_once('database/user.php');

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (isLoginCorrect($username, $password)){
    if ($username === 'admin'){
      die(header('Location: add_product.php'));
    }
  }

  if (isLoginCorrect($username, $password))
    $_SESSION['username'] = $username;
  else
    $_SESSION['message'] = 'Login failed!';

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>