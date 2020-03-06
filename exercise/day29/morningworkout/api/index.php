<?php

require_once 'DB.php';
require_once 'DB_functions.php';

require_once 'Games.php';


DB::connect ('localhost', 'games', 'root', 'rootroot');


header('Content-type: application/json');


header('Access-Control-Allow-Origin: *');


$query = "
  SELECT *
  FROM `games`
  ORDER BY `name` ASC
  ";

  $games = DB::select($query, []);
  var_dump($games);

echo json_encode($games);
// $results = select('
//   SELECT *
//   FROM `games`
//   ORDER BY `name` ASC
// ');

// var_dump($results);

// $results = select('
//   SELECT *
//   FROM `games`
//   ORDER BY `name` DESC
// ');

// $results = select('
//   SELECT *
//   FROM `games`
//   ORDER BY `rating`
// ');

// var_dump($results);

// var_dump($results);

// $results = select('
//   SELECT *
//   FROM `games`
//   ORDER BY `rating` ASC
// ');

// var_dump($results);

// $results = select('
//   SELECT *
//   FROM `games`
//   ORDER BY `rating` DESC
// ');

// var_dump($results);