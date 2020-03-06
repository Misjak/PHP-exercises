<?php

require_once 'DB.php';

require_once 'DB_functions.php';

require_once 'Country.php';

require_once 'Region.php';


connect('localhost', 'world', 'root', 'rootroot');

$results = select('
  SELECT *
  FROM `country`
  WHERE `population` > ?
    AND `GNP` > ?
  ORDER BY `population` DESC
  LIMIT 10', [2000000, 1000000], 'Country'
);

var_dump($results);

// foreach ($results as $result) {
//   echo $result->getCodeLowercase() . '<br>'
// ;}


// Write a PHP function that would take one argument $page_nr and prepare a SQL query that would select records from the city table for one page of a list, where each page has 20 items and the parameter $page_nr is the number of the page.

function get_cities_page ($page_nr) 
{
  $offset = max(0, ($page_nr - 1) * 20);

  return select ("
      SELECT *
      FROM `city`
      ORDER BY `Population` DESC
      LIMIT {$offset}, 20
    "
  );
};

$cities = get_cities_page(1); // first 20 cities
$cities = get_cities_page(2); // second 20 cities 
$cities = get_cities_page(3); // third 20 cities

var_dump($cities);


$region = new Region;
$region->name = 'Central Africa';
$region->slug = 'central-africa';
$region->insert();
var_dump($region);


$north_america = select_one("
SELECT *
FROM `region` 
WHERE `name` = ?", 
['Central Africa'], 'Region');

var_dump($north_america);

$region->slug = 'north-africa';
$region->update();




$region = select_one("SELECT * FROM `region` WHERE `id` = ?", [2], 'Region');
$region->delete();