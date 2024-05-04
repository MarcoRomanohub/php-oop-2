<?php

class Ingredients
{

  public $ingredientsList;

  public function __construct(array $_ingredientsList)
  {
    $this->ingredientsList = $_ingredientsList;
  }

  public function getIngredientsDetail()
  {
    return "$this->ingredientsList";
  }
}
