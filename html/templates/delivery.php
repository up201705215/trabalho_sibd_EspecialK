    <!DOCTYPE html>
    <html>

    <body>
        
        <form action="action_delivery.php" method="post">
        <label for="appt">Ja Fez o seu pedido? O resto, deixe conosco!!!</label>


        <label> Nome Completo:
        
            <input type="text" name="nome_delivery" id="nome_delivery">
        
        </label>

        <label> Nº de Telefone:
        
            <input type="integer"
            name="telefone" id="telefone">
        
        </label>


        <label >Morada-<?php echo $user['morada']?></label>

        <label for="hora">Hora</label>
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

    </body>

    </html>
