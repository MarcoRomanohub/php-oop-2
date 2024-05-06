<?php

require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/Accessory.php';
require_once __DIR__ . '/Model/db.php';

$foods = array_filter($products, fn ($product) => get_class($product) === 'Food');

$toys = array_filter($products, fn ($product) => get_class($product) === 'Toy');

$accessories = array_filter($products, fn ($product) => get_class($product) === 'Accessory');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css' integrity='sha512-U9Y1sGB3sLIpZm3ePcrKbXVhXlnQNcuwGQJ2WjPjnp6XHqVTdgIlbaDzJXJIAuCTp3y22t+nhI4B88F/5ldjFA==' crossorigin='anonymous' />
  <title>php oop 2</title>
</head>

<body>

</body>

</html>