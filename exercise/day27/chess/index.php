<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
body {
  background-color: lightblue;
}

</style>




<body>
 

<?php

require_once 'Piece.php';
require_once 'Square.php';

$piece = new Piece('P');

$black_pawn = new Piece('p');
$white_queen = new Piece('Q');
 
echo $black_pawn;
echo $white_queen;

echo $piece;

?>

</body>
</html>




