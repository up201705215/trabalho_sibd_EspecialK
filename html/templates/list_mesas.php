<section id="mesas">
  <h2>Mesas Disponíveis</h2>

  <form id="search_mesa" action="list_mesas.php">
    <label for="quantidade_mesa">Quantas pessoas que frequentarão o restaurante?</label>
    <input type="number" name="quantidade_mesa" placeholder="quantidade_mesa" min="1" max="10">
    <input type="submit" value="pessoas">
  </form>

  <ul>
    <?php foreach ($mesas as $mesa) { ?>
      <li>

        <a href="list_categories.php">
          <span><?= $mesa['capacidade'] ?> Pessoas </span>
          <img href="list_categories.php" src="<?= '/images/mesas/' . $mesa['image_name'] ?>" alt="<?= 'Image preview for mesa ' . $mesa['image_name'] ?>">

        </a>
        </a>
      </li>

    <?php } ?>
  </ul>
</section>