<?php
require_once 'models/Prodotto.php';

$prodotti = [
  new Prodotto('models/immagini/cuccia.jpg', 'Cuccia per Cani', '29.99€', 'Cani'),
  new Prodotto('models/immagini/cibo.jpg', 'Cibo per Cani', '10.99€', 'Cani'),
  new Prodotto('models/immagini/gioco.jpg', 'Gioco per Gatti', '5.99€', 'Gatti'),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Animalstore | Shop-Online</title>
</head>

<body>

  <header>
    <div class="container p-2 text-center">
      <h2>Animalstore</h2>
    </div>
  </header>
  <div class="container my-5">
    <?php foreach ($prodotti as $prodotto) : ?>
      <div class="card" style="width: 18rem;">
        <img src="<?php $prodotto->getImmagine(); ?>" class="card-img-top" alt="image">
        <div class="card-body">
          <h5 class="card-title"><?php $prodotto->getNome(); ?></h5>
          <p class="card-text"><?php $prodotto->getPrezzo(); ?></p>
          <a href="#" class="btn btn-primary"><?php $prodotto->getMarca(); ?></a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</body>

</html>