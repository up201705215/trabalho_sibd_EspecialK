<?php
  function insertUser($username, $password, $email, $morada) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO users VALUES(?, ?, ?, ?)');
    $stmt->execute(array($username, sha1($password), $email, $morada));
  }

  function createAdmin() {

    $admin_username='admin';
    $admin_password='admin';
    $admin_email='admin';
    $admin_morada='admin';

    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO users VALUES(?, ?, ?, ?)');
    $stmt->execute(array($admin_username, sha1($admin_password), $admin_email, $admin_morada));
  }

 
  

  function isLoginCorrect($username, $password  ) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * 
                           FROM users 
                           WHERE username = ? AND password = ?');
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() !== false;
  }

  function saveProfilePic($username){
    move_uploaded_file($_FILES['pic']["tmp_name"],"images/users/$username.jpg");
  }

  function getPassword($username){
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));

    $user = $stmt->fetch();

    return $user['password'];
  }

  function getMorada($username){
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));

    $user = $stmt->fetch();

    return $user['morada'];
  }

  function getEmail($username){
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));

    $user = $stmt->fetch();

    return $user['email'];
  }

  function changePassword($username,$password){
    global $dbh;

    $stmt = $dbh->prepare('UPDATE users SET password = ? WHERE username = ?');
    $stmt->execute(array(sha1($password),$username));
  }

  function getprofile($username){
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));

    $user = $stmt->fetch();

    return $user;
  }
?>