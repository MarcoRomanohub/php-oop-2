<?php
require_once __DIR__ . '/Category.php';
class Product
{

  public $name;
  public $price;
  public $image;
  public $category;


  public function __construct(string $_name, float $_price, string $_image, Category $_category)
  {
    $this->name = $_name;
    $this->price = $_price;
    $this->image = $_image;
    $this->category = $_category;
  }

  public function getFormatPrice()
  {
    return number_format($this->price, 2, ',', '.');
  }
}
