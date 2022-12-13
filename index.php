<?php

  require_once __DIR__ . '/Models/Category.php';
  require_once __DIR__ . '/Models/Food.php';
  require_once __DIR__ . '/Models/Accessory.php';
  require_once __DIR__ . '/Models/Toy.php';
  require_once __DIR__ . '/Models/User.php';
  require_once __DIR__ . '/Models/Order.php';

  require_once __DIR__ . '/db/db.php';


  //var_dump($categories);
  //var_dump(get_class($products[0]));

  // filtro l'array generale dei prodotti per nome classe quindi per tipo e se è presente in magazzino
  $food = array_filter($products, fn ($product) => get_class($product) == 'Food' && $product->is_available);
  $toy = array_filter($products, fn ($product) => get_class($product) == 'Toy' && $product->is_available);
  $accessory = array_filter($products, fn ($product) => get_class($product) == 'Accessory' && $product->is_available);

  //var_dump($food);


  include './Views/layout/head.php';
  include './Views/layout/header.php';
  include './Views/partials/shop.php';
  include './Views/layout/footer.php';

