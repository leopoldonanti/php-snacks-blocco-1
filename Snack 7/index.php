<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
  
<?php 
  
  $students = [
    [ 'nome' => 'Luca',
      'cognome' => 'Logallo',
      'voti' => [ 8,7,6,5,5,]
    ],
    [ 'nome' => 'Alessandro',
      'cognome' => 'Gallus',
      'voti' => [ 8,7,6,5,5,]
    ],
    [ 'nome' => 'Fabio',
      'cognome' => 'Pisanelli',
      'voti' => [ 9,9,9,9,4,]
    ],
  ];

?>

<ul>
  <?php foreach($students as $student) { ?>

  <li>

    <?php echo ($student['nome']) ?>
    <?php echo ($student['cognome']) ?>
     - Media voti: 
     <?php echo number_format(array_sum($student['voti']) / count($student['voti'])) ?>

  </li>
  <?php } ?>
</ul>



</body>
</html>