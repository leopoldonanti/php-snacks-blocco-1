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

$arr = [];
    
    while (count($arr) < 50) {
      $num = rand(1, 50);
      if (!in_array($num, $arr)) {
        array_push($arr, $num);
      }
    }


?>
</body>
</html>