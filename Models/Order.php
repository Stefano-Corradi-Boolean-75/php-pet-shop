<?php

class Order{
  public $user;
  public $products;
  public $date;
  private $amount = 0;
  private $final_amount = 0;
  public $status = 'pending';  // pending | confirmed | sent | delivered | canceled

  public function __construct(User $_user, Array $_products, String $_date)
  {
    $this->user = $_user;
    $this->products = $_products;
    $this->date = $_date;
    $this->setAmount();
  }

  public function addProduct($_product){
    if($_product->is_available){
      $this->products[] = $_product;
    }
    $this->setAmount();
  }

  public function removeProduct($_product){
    $this->products = array_filter($this->products, fn ($prod) => $prod != $_product);
    $this->setAmount();
  }

  private function setAmount(){
    $this->amount = 0;
    foreach ($this->products as  $product) {
      $this->amount += $product->getFinalPrice();
    }
 
    $this->final_amount = $this->amount * (1 - $this->user->getDiscount() / 100);

  }

  public function getAmount(){
    return $this->amount;
  }

  public function getFinalAmount(){
    return $this->final_amount;
  }

  public function getAmountFormatted(){
    return number_format($this->amount,2,',','.');
  }

  public function getFinalAmountFormatted(){
    return number_format($this->final_amount,2,',','.');
  }

}