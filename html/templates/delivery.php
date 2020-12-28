    <!DOCTYPE html>
    <html>

    <body>
        <section id="delivery">
        <form action="action_delivery.php" method="post">
        <h2>Ja Fez o seu pedido? O resto, deixe conosco!!!</h2>


        <p>Nome Completo:</p>
        
            <input type="text" name="nome_delivery" id="nome_delivery">
        
    

        <p>Nº de Telefone:</p>
        
            <input type="integer"
            name="telefone" id="telefone">
        
     


        <p>Morada-<?php echo $user['morada']?><p>

        <p for="hora">Hora</p>
    <select id="hora" name="hora" type="integer">
      <option value=1>12:00-12:30</option>
      <option  value=2>12:30-13:00</option>
      <option  value=3>13:00-13:30</option>
      <option  value=4>13:30-14:00</option>
      <option value=5>19:00-19:30</option>
      <option  value=6>20:00-20:30</option>
      <option  value=7>20:30-21:00</option>
      <option  value=8>21:00-21:30</option>
    </select>   
        <input type="submit" value="Finalizar Pedido">   
        </Label>
        </form>

    </section>
    </body>

    </html>
