<?php

require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/Accessory.php';
require_once __DIR__ . '/data/db.php';

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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous' />
  <title>php oop 2</title>
</head>

<body>

  <div class="container my-5">
    <h1>Pet Shop</h1>

    <h2>Cibo</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Cat.</th>
          <th scope="col">Immagine</th>
          <th scope="col">Nome</th>
          <th scope="col">Prezzo</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($foods as $item) : ?>
          <tr>
            <td><?php echo $item->category->icon ?></td>
            <td><img class="w-25" src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>"></td>
            <td><?php echo $item->name ?></td>
            <td>&euro; <?php echo $item->getFormatPrice() ?></td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>



  </div>


</body>

</html>