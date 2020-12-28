<section id="categories">
  <ul>
    <?php foreach ($categories as $category) { ?>
      <li>
        
        <a href="list_products.php?id=<?=$category['id']?>">
          <div class="fadeimg">
          <h2><?=$category['name']?></h2>
		  <img src="<?='/images/categories/' . $category['image_name']?>" alt="<?='Image preview for category ' . $category['name']?>">
			</div>
        </a>
		
      </li>
    <?php } ?>
  </ul>
</section>