<?php


class Category{

  public $name;
  public $icon;

  public function __construct(String $_name, String $_icon)
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }

}