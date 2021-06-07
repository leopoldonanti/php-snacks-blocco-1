<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
  <h1>Snack 4</h1>

<?php

$arrayRandom = [];
    
    while (count($arrayRandom) < 50) {
      $num = rand(1, 50);
      if (!in_array($num, $arrayRandom)) {
        array_push($arrayRandom, $num);
      }
    };
var_dump($arrayRandom)

?>
</body>
</html>