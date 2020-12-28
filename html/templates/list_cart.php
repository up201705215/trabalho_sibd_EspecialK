<section id="cart">
  <h2>Pedido</h2>

  <?php
  if (count($products) < 1) {
  ?>
    <p>O seu carrinho está vazio.</p>
  <?php
  } else { ?>
    <table>
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <?php foreach ($products as $product) { ?>
        <tr>
          <td><img src="images/<?= $product['id'] ?>.jpg"></td>
          <td><?= $product['name'] ?></td>
          <td><?= $product['price'] ?>€</td>
          <td><?= $product['quantity'] ?></td>
          <td><?= $product['price'] * $product['quantity'] ?>€</td>
        </tr>
      <?php } ?>
    </table>
    <?php 
      $totalPrice = 0;
      foreach ($products as $product)
        $totalPrice += $product['price'] * $product['quantity'];
    ?>
    <p>Total Price: <?=$totalPrice?>€</>
  <?php } ?>

  <form action="action_checkout.php" method="post">
    <input type="radio" id="checkout_restaurant" name="checkout_type" value="1">
    <label for="checkout_restaurant">Eat at the restaurant</label><br>
    <input type="radio" id="checkout_delivery" name="checkout_type" value="2">
    <label for="checkout_delivery">Deliver order at home</label><br>
    <input type="radio" id="checkout_take_away" name="checkout_type" value="3">
    <label for="checkout_takeaway">
      Take-away</label><br>
    <input type="submit" value="Checkout" <?php
                                          if (count($products) < 1) {
                                          ?>disabled <?php } ?> >
  </form>

</section>