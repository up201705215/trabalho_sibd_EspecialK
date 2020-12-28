<?php
  require_once('config/init.php');
  require_once('database/product.php');

  $prod_id = $_POST['prod_id'];
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $cat_id = $_POST['cat_id'];
  $stock = $_POST['stock'];

  // if ($username === '') {
  //   $_SESSION['message'] = 'Invalid username!';
  //   die(header('Location: register.php'));
  // }

//   if(strlen($username)==0){
//     $_SESSION["message"]="Invalid Username";
//     die(header('Location: register.php'));
// }

//   if(strlen($password)<4){
//     $_SESSION["message"]="password too short";
//     die(header('Location: register.php'));
// }

  
    insertProduct($prod_id,$product_name, $price, $cat_id,$stock); 
    saveProductPic($prod_id);  
    
    header('Location: list_categories.php')

  
?>