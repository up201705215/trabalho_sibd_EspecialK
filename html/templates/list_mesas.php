<section id="mesas">
  <h2>Mesas Disponíveis</h2>

  <form id="search_mesa" action="list_mesas.php">
  <label for="quantidade_mesa">Quantidade de pessoas que frequentarão o restaurante:</label>
    <input type="number" name="quantidade_mesa" placeholder="quantidade_mesa" min="1" max="10">
    <input type="submit" value="pessoas">
</form>

  <ul>
    <?php foreach ($mesas as $mesa) { ?>
      <li>
        
        <a  href="list_products.php?id=<?=$mesa['capacidade']?>">
          <?=$mesa['capacidade']?> Pessoas 
          <img href="list_products.php" src="<?='/images/mesas/' . $mesa['image_name']?>" alt="<?='Image preview for mesa ' . $mesa['image_name']?>">
        </a>
        </a>
      </li>
    <?php } ?>
  </ul>
</section>