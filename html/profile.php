<?php
  require_once('config/init.php');
  require_once('database/user.php');

 
  $username= $_SESSION['username'];

  $user=getprofile($username);
  

  
 

  include('templates/header.php');
  include('templates/profile.php');
  include('templates/footer.php');
?>