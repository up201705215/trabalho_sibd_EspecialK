
<!-- <input name="data" type="date" value="2020-12-30">


<input type="time" id="lol" name="lol"
       min="12:00" max="15:00" required>  -->

 
 <!DOCTYPE html>
    <html>

    <body>
        <section id="delivery">
        <form action="action_delivery.php" method="post">
        <h2>Escolha a data e a hora para vir levantar o seu pedido na nossa zona Take Away:</h2>


        <p>Em que nome fica o seu pedido</p>
        
            <input type="text" name="nome_takeaway" id="nome_takeaway">


        <p for="hora_takeaway">Hora</p>
    <select id="hora_takeaway" name="hora_takeaway" type="integer">
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
