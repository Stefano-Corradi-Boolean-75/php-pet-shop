<?php

trait Address{

  public $street;
  public $street_number;
  public $zip;
  public $city;
  public $country;

  public function getFullAddress(){
    return "$this->street $this->street_number $this->zip $this->city $this->country";
  }

}