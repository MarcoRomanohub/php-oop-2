<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{

  public $features;
  public $size;

  public function __construct(
    string $_name,
    fLoat $_price,
    string $_image,
    Category $_category,
    string $_features,
    string $_size
  ) {

    parent::__construct($_name, $_price, $_image, $_category);

    $this->features = $_features;
    $this->size = $_size;
  }
}
