
<?php

// this is where logic belongs

// data preparation 

// request handling

var_dump($_GET);
var_dump($_POST);


$data_we_want_to_send_over_get = [
    'ofdery' => 'name',
    'way'   => 'desc',
    'search' => 'Příliš žluťoučký kůň ďabelské ódy'

];

$query_string = http_build_query($data_we_want_to_send_over_get);

var_dump($query_string);


switch ($_GET['page']) {
  case 'home': 
      echo 'DISPLAYING THE HOMEPAGE';
      break;
  case 'form': 
      echo 'DISPLAYING THE FORM';
      break;
  case 'contact': 
      echo 'DISPLAYING THE CONTACT INFO';
      break;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<nav>

<a href="?<?= http_build_query(['page' => 'home'])?>">Home</a>
<a href="<?= http_build_query(['page' => 'contact'])?>">Contact</a>
<a href="<?= http_build_query(['page' => 'form'])?>">Form</a>

</nav>
  

<form action="" method="post">

<input type="text" name="text" value=""> <br>
<br>

<textarea name="biography" id="" cols="30" rows="10"></textarea><br>
<br>

<input type="number" name="age" value="">

<input type="submit" value="Submit the form">


</form>


</body>
</html>