<!DOCTYPE html>
<html>

    <!-- <style type="text/css">
      .wrapper
      {
          widht:400px;
          margin:0 auto;
         
      } -->
    
    <!-- </style> -->
    
    <body>
        <form action="change_user.php" method="post">

            <button style="float:right;widht:70px; "name="submit1">Mudar palavra passe</button>
      </form>
      <div class="wrapper">
      

      <label for="apt"> A Minha conta</label>
        </div>

        <div><img src="images/users/<?=$_SESSION['username']?>.jpg" alt="profile_pic"></div>
        <label for="apt">Bem Vindo <?php echo $user['username']?></label>



        <label >Email-<?php echo $user['email']?></label>
        <label >Morada-<?php echo $user['morada']?></label>
        
      
      


    </body>
    


</html>

