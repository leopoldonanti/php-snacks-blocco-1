<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      background-color: red;
      color: blue;
    }
  </style>
</head>
<body>
  

<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<h1>CALENDARIO PARTITE</h1>

<?php 

  $partite = [

    [
    'squadra-ospite' => 'Padova',
    'squadra-locale' => 'Venezia',
    'punti-ospite'  => (99),
    'punti-locale' => (93)
    ],

    [
      'squadra-ospite' => 'Padova',
      'squadra-locale' => 'Vicenza',
      'punti-ospite'  => (100),
      'punti-locale' => (102)
    ],

    [
      'squadra-ospite' => 'Padova',
      'squadra-locale' => 'Rovigo',
      'punti-ospite'  => (120),
      'punti-locale' => (110)
    ], 

  ];


?>
<ul>

  <?php 
      foreach ($partite as $partita){
    ?>

  <li>

    <?php echo $partita['squadra-ospite'] ?> - <?php echo $partita['squadra-locale'] ?> | <?php echo $partita['punti-ospite'] ?> - <?php echo $partita['punti-locale'] ?>

  </li>
  
    <?php  } ?>

</ul>

  

</body>
</html>