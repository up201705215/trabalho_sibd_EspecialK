<?php
require_once('config/init.php');
require_once('database/user.php');

$username = $_SESSION['username'];
$antiga = sha1($_POST['antiga']);
$nova = $_POST['nova'];
$confirma = $_POST['confirma'];

if ($nova === '') {
  $_SESSION['message'] = 'Username Inválido!';
  die(header('Location: change_user.php'));
}

if (strlen($nova) == 0) {
  $_SESSION["message"] = "Username Inválido";
  die(header('Location: change_user.php'));
}

if (strlen($nova) < 4) {
  $_SESSION["message"] = "Password demasiado pequena";
  die(header('Location: change_user.php'));
}

if ($antiga && $nova && $confirma) {
  if ($nova === $confirma) {
    if (sha1($antiga, getPassword($username))) {
      try {
        changePassword($username, $nova);
        $_SESSION['message'] = 'Password alterada com sucesso!';
        die(header('Location: change_user.php'));
      } catch (PDOException $e) {
        $_SESSION['message'] = 'ERROR: Password não alterada';
        die(header('Location: change_user.php'));
      }
    } else {
      $_SESSION['message'] = 'Password antiga errada!';
      die(header('Location: change_user.php'));
    }
  } else {
    $_SESSION['message'] = 'Passwords novas não coincidem!';
    die(header('Location: change_user.php'));
  }
}
