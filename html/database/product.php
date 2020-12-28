<?php

  function getProductsByCategory($id, $page) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * 
                           FROM product 
                           WHERE cat_id = ?
                           ORDER BY id DESC');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function getProductById($id) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * 
                           FROM product 
                           WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

  function getProductsBySearch($id, $name, $min, $max) {
    global $dbh;

    $query = 'SELECT * FROM product WHERE cat_id = ?';
    $params = array($id);

    if ($name !== '') {
      $query .= ' AND UPPER(name) LIKE UPPER(?)';
      $params[] = '%' . $name . '%';
    }

    if ($min !== '') {
      $query .= ' AND price >= ?';
      $params[] = $min;
    }

    if ($max !== '') {
      $query .= ' AND price <= ?';
      $params[] = $max;
    }

    $stmt = $dbh->prepare($query);
    $stmt->execute($params);
    return $stmt->fetchAll();
  }

  function insertProduct($prod_id,$product_name, $price, $cat_id,$stock) {
    global $dbh;
    $stmt = $dbh->prepare('INSERT INTO product (name, price, cat_id, stock) VALUES(?, ?, ?, ?)');
    $stmt->execute(array($product_name, $price, $cat_id,$stock));

    $stmt = $dbh->prepare('SELECT * from product WHERE name = ?');
    $stmt->execute(array($product_name));
    $produto = $stmt->fetch();
    return $produto['id'];
  }



  function saveProductPic($prod_id){
    move_uploaded_file($_FILES['prod_pic']["tmp_name"],"images/$prod_id.jpg");
  }
