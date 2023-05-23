<?php
require_once 'models/Prodotto.php';

$prodotti = [
  new Prodotto('models/immagini/cibo.jpg', 'Cibo gusto pollo', 'Cani', '69.99€'),
  new Prodotto('models/immagini/cibo3.jpg', 'Cibo gusto coniglio', 'Cani', '21.99€'),
  new Prodotto('models/immagini/cibo2.jpg', 'Cibo gusto pollo', 'Cani', '56.99€'),
  new Prodotto('models/immagini/cuccia3.jpg', 'Cuccia in legno da esterno', 'Cani', '29.99€'),
  new Prodotto('models/immagini/gioco.jpg', 'Gioco in legno per pareti', 'Gatti', '5.99€'),
  new Prodotto('models/immagini/cuccia2.jpg', 'Cuccia in legno da esterno', 'Cani', '29.99€'),
];

include __DIR__ . '/layout/header.php';
include __DIR__ . '/layout/head.php';

?>

<!DOCTYPE html>
<html lang="en">

<body>
  <div class="container my-5 d-flex flex-wrap justify-content-center">
    <?php foreach ($prodotti as $prodotto) : ?>
    <div class="card m-4" style="width: 18rem;">
      <img src="<?php $prodotto->getImmagine(); ?>" class="card-img-top" alt="image">
      <div class="card-body">
        <h5 class="card-title"><?php $prodotto->getNome(); ?></h5>
        <p class="card-text"><?php $prodotto->getPrezzo(); ?></p>
        <p class="card-text"><?php $prodotto->getMarca(); ?></p>
        <a href="#" class="btn btn-primary">Acquista</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

</body>

</html>