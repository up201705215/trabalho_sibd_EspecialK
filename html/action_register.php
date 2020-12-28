<?php
  require_once('config/init.php');
  require_once('database/user.php');

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $morada = $_POST['morada'];

  if ($username === '') {
    $_SESSION['message'] = 'Invalid username!';
    die(header('Location: register.php'));
  }

  if(strlen($username)==0){
    $_SESSION["message"]="Invalid Username";
    die(header('Location: register.php'));
}

  if(strlen($password)<4){
    $_SESSION["message"]="password too short";
    die(header('Location: register.php'));
}

  try {
    insertUser($username, $password, $email, $morada); 
    saveProfilePic($username);    
    header('Location: list_categories.php');
  } catch(PDOException $e) {
    if (strpos($e->getMessage(), 'users_pkey') !== false)
      $_SESSION['message'] = 'Username already exists!';
    else
      $_SESSION['message'] = 'Registration failed!';
    header('Location: register.php');
  }
?>