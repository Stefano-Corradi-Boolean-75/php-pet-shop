<?php

require_once __DIR__ . '/Category.php';

class Product{

  public $name;
  public $price;
  public $image;
  public $is_available;
  public $quantity;
  public $category;
  protected $discount = 0;

  public function __construct(String $_name, Float $_price, String $_image, Category $_category, Bool $_is_available, Int $_quantity)
  {
    $this->name = $_name;
    $this->price = $_price;
    $this->image = $_image;
    $this->is_available = $_is_available;
    $this->quantity = $_quantity;
    $this->category = $_category;
  }

  public function setDiscount(Int $_discount){
    if($_discount < 0 || $_discount > 99){
      // gestiremo l'errore
      throw new Exception('Errore! Il numero deve essere fra 0 e 100');
      $this->discount = 0;
    }else{
      $this->discount = $_discount;
    }
  }

  public function getDiscount(){
    return $this->discount;
  }

  public function getFinalPrice(){

    return $this->price *= (1 - ($this->discount/100));

  }

  public function getFinalPriceFormat(){

    $final_price = $this->price *= (1 - ($this->discount/100));

    return number_format($final_price,2,',','.');

  }

}