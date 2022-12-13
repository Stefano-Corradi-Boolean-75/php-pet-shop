<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product{

  public $material;
  public $size;

  public function __construct(String $_name, Float $_price, String $_image, Category $_category, Bool $_is_available, Int $_quantity, String $_material, String $_size)
  {
    parent::__construct($_name, $_price, $_image, $_category, $_is_available, $_quantity);

    $this->material = $_material;
    $this->size = $_size;

  }

}