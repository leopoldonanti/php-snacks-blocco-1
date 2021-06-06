<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
 -->
 <h1>Snack 3</h1>


 <?php

 $arrayEventi = [

  '11-09-2001' => [

    'nome' => 'Attentato Twin Towers',
    'dove' => 'new york city',
  ],
  '13-11-2015' => [

    'nome' => 'Attentato Bataclan',
    'dove' => 'Parigi',
  ],
  '23-10-2002' => [

    'nome' => 'Crisi del teatro Dubrovka',
    'dove' => 'Dubrovka',
  ],
  
 ]

?>

<ul>

  <?php 
      foreach ($arrayEventi as $arrayEvento){
    ?>

  <li>

    <?php echo ($arrayEvento['nome'])?> : <?php echo $arrayEvento['dove'] ?> 

  </li>
  
    <?php  } ?>

</ul>


</body>
</html>