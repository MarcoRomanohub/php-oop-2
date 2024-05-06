<?php

require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/Accessory.php';
require_once __DIR__ . '/Model/db.php';


$cuccia = new Product('Cuccia per cani di taglia piccola', 6.00, 'Cani', 'Cucce');
$croccantini = new Food('croccantini gatti taglia piccola', 10.00, 'Gatti', 'Cibo', new Ingredients(['Manzo', 'Pollo']));

var_dump($cuccia);
var_dump($croccantini);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php oop 2</title>
</head>

<body>

</body>

</html>