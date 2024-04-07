<?php

require './Models/Prodotti.php';
require './Models/Categoria.php';

$categoriaCane = new Categoria("Cani", "fa-dog");
$categoriaGatto = new Categoria("Gatti", "fa-cat");

var_dump($categoriaCane);
var_dump($categoriaGatto);

$nuovoProdotto = new Prodotto("Cuccia", 15, $categoriaCane, 1);

var_dump($nuovoProdotto);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/bde75078f7.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>
        Pet Shop
    </h1>
    <div class="container">
        <i class="fa-solid fa-dog"></i>
        <i class="fa-solid fa-cat"></i>
    </div>
</body>
</html>