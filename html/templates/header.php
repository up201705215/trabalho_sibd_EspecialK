<!DOCTYPE html>
<html>
  <head>
    <title>ESPECIAL K</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Merriweather" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <header class="full-width">
      <h1><a href="list_categories.php">ESPECIAL <i class="fab fa-korvue"></i>

</a>
      
    </h1>
      <div class="cart">
        <a href="list_cart.php">
          <i class="fas fa-shopping-basket"></i> [<?=cartSize()?>]
        </a>
		<form action="reset_cart.php" method="post">
              <button class="resetbtn"  type="submit">
                <i class="fas fa-times"></i>
              </button>
      </form>
      </div>

      

      <?php if (isset($_SESSION['username'])) { ?>
        
        <a href="profile.php">
          
        <img src="images/users/<?=$_SESSION['username']?>.jpg" alt="profile_pic"></a>
        <form class="logout" action="action_logout.php">
          <span>
          <a href="profile.php">
            
            <?=$_SESSION['username']?>
            </a>
          </span>
          <button class="logout-btn" type="submit">Logout</button>
        </form>
      <?php } else { ?>
        <form class="login" action="action_login.php" method="post">
          <input type="text" placeholder="username" name="username">
          <input type="password" placeholder="password" name="password">
          <button class="login-btn" type="submit">Login</button>
          <a href="register.php">Register</a>
        </form>
      <?php } ?>
      <?php if (isset($_MESSAGE)) { ?>
        <div class="message">
          <?=$_MESSAGE?>
        </div>
      <?php } ?>
    </header>
