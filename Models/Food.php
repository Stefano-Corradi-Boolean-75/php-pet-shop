<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{

  public $weight;
  public $ingredients;

  public function __construct(String $_name, Float $_price, String $_image, Category $_category, Bool $_is_available, Int $_quantity, Int $_weight, Array $_ingredients)
  {
    parent::__construct($_name, $_price, $_image, $_category, $_is_available, $_quantity);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;

  }

}