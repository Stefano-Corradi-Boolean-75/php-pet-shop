<?php

require_once __DIR__ . '/Address.php';

class User{

  use Address;

  public $name;
  public $lastname;
  protected $age = null;
  // il metodo protetto è visto dai figli della classe ma non all'esterno
  protected $discount = 0;

  public function __construct($_name, $_lastname, $_age)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->setAge($_age);
    $this->setDiscount();
  }

  public function get_full_name(){
    return "$this->name $this->lastname";
  }

  public function setAge($_age){
    if(is_numeric($_age)){
      $this->age = $_age;
    }
    $this->setDiscount();
  }

  public function setDiscount(){
      if($this->age > 65 ){
        $this->discount = 25;
      }else{
        $this->discount = 0;
      }
  }

  public function getDiscount(){
    return $this->discount;
  }


}