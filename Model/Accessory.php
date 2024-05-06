<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product
{

  public $material;
  public $size;

  public function __construct(
    string $_name,
    fLoat $_price,
    string $_image,
    Category $_category,
    string $_material,
    string $_size
  ) {

    parent::__construct($_name, $_price, $_image, $_category);

    $this->material = $_material;
    $this->size = $_size;
  }
}
