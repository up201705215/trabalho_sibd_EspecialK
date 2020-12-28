<section id="products">
  <form action="list_products.php" method="get">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="min" placeholder="min price">
    <input type="text" name="max" placeholder="max price">
    <input type="submit" value="Search">
  </form>
  <section class="list">
    <?php foreach ($products as $product) { ?>
      <article>
        <h3><?= $product['name'] ?></h3>

        <span class="price"><?= $product['price'] ?>€</span>

        <span class="stock"><?= $product['stock'] ?> <?= $product['name'] ?> em stock</span>

        <form action="action_add_to_cart.php" method="post">
          <input type="hidden" name="id" value="<?= $product['id'] ?>">
          <input type="number" value="0" min="1" name="quantity">
          <button type="submit">
            <i class="fas fa-shopping-basket"></i>
          </button>
        </form>
        <img src="images/<?= $product['id'] ?>.jpg">
      </article>
    <?php } ?>
  </section>
</section>