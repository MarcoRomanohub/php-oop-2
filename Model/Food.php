<?php

class Food extends Product
{
  public $ingredients;

  function __construct(string $_name, int $_price, string $_category, string $_type, ingredients $_ingredients)
  {

    parent::__construct($_name,  $_price,  $_category,  $_type);

    $this->ingredients = $_ingredients;
  }

  public function getProductInfo()
  {

    return parent::getProductInfo() . ", Ingredients" . $this->ingredients->getIngredientsDetail();
  }
}
