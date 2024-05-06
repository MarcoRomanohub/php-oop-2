<?php

require_once __DIR__ . '/Product.php';
class Food extends Product
{
  public $ingredients;

  public function __construct(string $_name, float $_price, string $_image, Category $_category, array $_ingredients)
  {

    parent::__construct($_name,  $_price,  $_image,  $_category);

    $this->ingredients = $_ingredients;
  }
}
