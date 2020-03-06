


  <?php


$name = 'Michaela';
$surename = 'Sidorova';
$year_of_birth = 1990;
$height = 170;

echo 'First name: ' . $name . '<br>' . 'Surename: '. $surename . '<br>'. 'Year of birth: ' . $year_of_birth . '<br>' . 'Height: '. $height . 'cm' . '<br>';

define ('SERVER_SOFTWARE', 'Apache');

echo 'This server is running on ' . SERVER_SOFTWARE;

define ('OPERATING_SYSTEM', 'Mac OS');

echo '<br>'. 'My operating system is ' . OPERATING_SYSTEM;

// function greet($whom) {
//   return 'Hello World!' ;
// };

// echo greet();

echo "-----------------------\n";


$cars_i_want = [];
array_push($cars_i_want, 'Aston Martin',
'Bugatti',
'Ferrari',
'Lamborghini',
'Maserati',
'Mercedes',
'Porsche',
'Skoda');

var_dump ($cars_i_want);
echo ( '<br>'.'For myself I would buy '. $cars_i_want[1]. '<br>');
$cars_i_want[4] = 'Smart';
echo ('<br>'.$cars_i_want[4]);

echo '<ul>';
foreach ($cars_i_want as $car) {
  echo ('<li>' . $car . '</li>');
}
echo '<ul>';



$car_prices = [
  'Skoda Octavia' => 270000,
  'Volkswagen Golf' => 170000,
  'BMW X6' => 380000,
  'Porsche 911' => 1150000
];

echo ('You can have a Porsche for just ' . $car_prices['Porsche 911']  . ' CZK.');


foreach ($car_prices as $type => $price) {
echo ('The price of '. $type . ' is ' . $price . ' CZK.<br>');
}


echo '<br>';








?>





  

  
