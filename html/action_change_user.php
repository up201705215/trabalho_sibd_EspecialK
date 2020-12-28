<?php
  require_once('config/init.php');
  require_once('database/user.php');

  $username = $_SESSION['username'];
  $antiga = sha1($_POST['antiga']);
  $nova = $_POST['nova'];
  $confirma = $_POST['confirma'];

  if ($nova === '') {
    $_SESSION['message'] = 'Invalid username!';
    die(header('Location: change_user.php'));
  }

  if(strlen($nova)==0){
    $_SESSION["message"]="Invalid Username";
    die(header('Location: change_user.php'));
}

  if(strlen($nova)<4){
    $_SESSION["message"]="password too short";
    die(header('Location: change_user.php'));
}

if($antiga && $nova && $confirma){
  if($nova === $confirma) { /*VERIFICAR NEW = CONF PASSWORD*/
    if (sha1($antiga, getPassword($username))) { /*VERIFICAR OLD PASSWORD*/
      try {
        changePassword($username,$nova);
        $_SESSION['message'] = 'Password changed with success!';
        die(header('Location: change_user.php'));
      } catch (PDOException $e) {
        $_SESSION['message'] = 'ERROR: Password not changed';
        die(header('Location: change_user.php'));      }
    } else {
      $_SESSION['message'] = 'Old password wrong!';
      die(header('Location: change_user.php'));    }
  } else {
    $_SESSION['message'] = 'Confirmation password different from New password!';
    die(header('Location: change_user.php'));
  }
}
?>