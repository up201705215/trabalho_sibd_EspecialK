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
        
      <div class="wrapper">
      

      <h2> A Minha conta</h2>
        

        <div><img src="images/users/<?=$_SESSION['username']?>.jpg" alt="profile_pic"></div>
        <label for="apt">Bem Vindo <?php echo $user['username']?></label>



        <label >Email-<?php echo $user['email']?></label>
        <label >Morada-<?php echo $user['morada']?></label>
        
      
      <form action="change_user.php" method="post">

            <button style="float:right;widht:70px; "name="submit1">Mudar palavra passe</button>
      </form>
</div>

    </body>
    


</html>

