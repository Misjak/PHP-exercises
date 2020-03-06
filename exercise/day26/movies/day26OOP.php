<?php

//1

$movie_name = 'Arrival';


//2

$ratings = [
  'user1' => 69, 
  'user2' => 95, 
  'user3' => 82
];

// $ratings = array(
//   69, 
//   95, 
//   82
// );


// 3

function format_rating ($rating) {
  
  // 4
  return $rating . ' % ';
};

// 5

foreach ($ratings as $rating) {
 echo format_rating ($rating);
};

// 7

function get_username ($user_id) {

// 8
  $user_name = [
    'user1' => 'Bob',
    'user2' => 'Stuart',
    'user3' => 'Kevin'
  ];
  return $user_name[$user_id];
  // 11

};
echo get_username('user1');


// 10

foreach ($ratings as $user_id=>$rating) {
 
  echo get_username($user_id) . ' gave ' . $movie_name . ' a rating of ' . $rating. '%<br>';
  
  
 };



 





?>