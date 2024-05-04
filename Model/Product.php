<?php

class Product
{

  public $name;
  public $price;
  public $category;
  public $type;


  function __construct(string $_name, int $_price, string $_category, string $_type)
  {
    $this->setName($_name);
    $this->setPrice($_price);
    $this->setCategory($_category);
    $this->setType($_type);
  }

  public function setName($_name)
  {
    $this->name = $_name;
  }

  public function setPrice($_price)
  {
    $this->price = $_price;
  }

  public function setCategory($_category)
  {
    $this->category = $_category;
  }

  public function setType($_type)
  {
    $this->type = $_type;
  }
}
