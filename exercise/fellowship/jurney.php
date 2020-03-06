<?php 
// #1
$party = [
  'bilbo' => 'Bilbo Baggins',
  'frodo' => 'Frodo Baggins',
  'ring' => 'The One Ring'
];

// #2

if (!isset($_GET[ 'step' ]) OR $_GET > 0) {
  $party[ 'gandalf'] = 'Gandalf the Grey';
};

// #3

if ($_GET [ 'step' ] > 1) {
  unset($party[ 'bilbo' ]);
};


// #4

if ($_GET [ 'step' ] > 2) {
  $party['sam'] = 'Samwise Gamgee';

}
// #5

if ($_GET [ 'step' ] > 3) {
  unset($party['gandalf']);

}

// #9

if ($_GET [ 'step' ] > 4) {
  $party = leave_hobbiton($party);

}




?>