<?php
  require_once('config/init.php');
  require_once('database/category.php');

  $categories = getAllCategories();
  
  $cont=0;
  if($cont=0)createAdmin();
  $cont++;

  include('templates/header.php');
  include('templates/list_categories.php');
  include('templates/footer.php');
