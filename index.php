<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php

$students = array(
  '1' = "Michal Plaček",
  '2' = "Eni Sorin",
  '3' = "Thanh Hieu Ngo",
  '4' = "Martin Lédl",
  '5' = "Jakub Vávrů",
  '6' = "Jan Šlechta",
  '7' = "Libor Pluháček",
  '8' = "Karel Nakládal",
  '9' = "Štěpán Kolarovský",
  '10' = "Šimon Siksta",

);
?>

<H1> Závod </H1>

<?php
for ($i = 1; count($students) >= $i ; $i++) {?>
 <?= $i?>. <?=$students[$i]?> <br>

<?php }

?>






    
</body>
</html>