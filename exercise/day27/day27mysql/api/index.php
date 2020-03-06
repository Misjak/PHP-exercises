<?php

include 'data.php';

require_once 'Celebrity.php';

$celebrities = [];

foreach ($data as $item) {
  $celebrity = new Celebrity;
  $celebrity->loadFromArray($item);
  $celebrities [] = $celebrity;
}

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode($celebrities);