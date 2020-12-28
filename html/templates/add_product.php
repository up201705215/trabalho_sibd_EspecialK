<section id="add_product">
  <h2>Adicionar produto</h2>
  <form action="action_add_product.php" method="post" enctype="multipart/form-data" >
    
    <label for="product_name">Nome</label>
    <input type="text" name="product_name" placeholder="product_name">
    
    <label for="price">Preço</label>
    <input type="float" name="price" placeholder="price"> 

    <!-- <label for="cat_id">Categoria</label>
    <input type="integer" name="cat_id" placeholder="cat_id">  -->

    <label for="stock">Stock</label>
    <input type="integer" name="stock" placeholder="stock"> 

    <input type="file" name="prod_pic" placeholder="prod_pic"> 
    
     <label for="cat_id">Categoria</label>
    <select id="cat_id" name="cat_id" type="integer">
      <option value=1>Pratos</option>
      <option  value=2>Bebidas</option>
      <option  value=4>Entradas</option>
      <option  value=3>Sobremesas</option>
    </select>

    <input type="submit" value="Submit">
    
  </form>
</section>