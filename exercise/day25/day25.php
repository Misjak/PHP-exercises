<?php


$number = 0;
$number++;
var_dump($number);
echo ('<br>' . '------------------------------' . '<br>');

$number = 0;
var_dump($number++);

echo ('<br>' . '------------------------------' . '<br>');
$number = 0;
var_dump(++$number);




echo ('<br>' . '------------------------------' . '<br>');







$my_name = 'Michaela';
$height = 1.7; 

var_dump ($my_name, $height);


echo ('<br>' . '------------------------------' . '<br>');


function headline($text) {
  return ('<h1>' . $text . '</h1>');
}
echo (headline('My website'));


echo ('<br>' . '----------------------------' . '<br>');


$inches = 12;

function inchesToCentimeters($inches) {
  return $cm = $inches * 2.54;
}

echo inchesToCentimeters($inches);

echo ('<br>' . '----------------------------' . '<br>');



// $celsius = 100;

// function celsiusToFahrenheit ($celsius) {
//   return $far = (9 / 5) * $celsius + 32;
// }

// echo celsiusToFahrenheit($celsius);

echo ('<br>' . '----------------------------' . '<br>');

$temperature = 36.5 ;


function isHealthy ($far, $temperature) {
  
  if ($far > 0) {
     $c = ($far - 32) * ( 5/9);
      if ($c > $temperature){
        return ('higher temperature');
      } else {
       return ('lower temperature');
      }
    }
}
echo isHealthy(212, 0);



echo ('<br>' . '----------------------------' . '<br>');


$number = 42;

function evenOrOdd ($number) {
 echo 'The number is '. (($number % 2 == 0) ? 'even' : 'odd');
}

evenOrOdd($number);
echo ('<br>' . '----------------------------' . '<br>');
echo '<hr>';
//---------------------------------------------------


$weekday = 'Friday';

function sayWeekday ($weekday) {
  echo 'Today is '. $weekday;
}

sayWeekday($weekday);

echo '<hr>';
//---------------------------------------------------

$year_of_birth = 1990;

function sayBirthday ($year_of_birth) {
  $thisYear = date('Y');
  $age = $thisYear - $year_of_birth;
  echo 'I was born in '. $year_of_birth . ' so this year I am celebrating my ' . $age . '. birthday';
}

sayBirthday($year_of_birth);

echo '<hr>';
//---------------------------------------------------
$heightCm = 0;

function assessHeight($heightCm) {
  if ($heightCm > 180) {
    return 'tall';
  } elseif ($heightCm < 160) {
    return 'small';
  } else {
    return 'average';
  }
}
echo assessHeight(190);

echo '<hr>';
//---------------------------------------------------

$programingLanguages;

function getLanguageUsage($programingLanguages) {
  switch ($programingLanguages) {
    case 'php':
      echo strtoupper($programingLanguages ) . ' is serverside';
      break;

    case'python':
      echo ucfirst($programingLanguages ) . ' is serverside';
    break;
     
    case 'ruby':
        echo ucfirst($programingLanguages ) . ' is serverside';
    break;

    case 'javascript':
        echo 'JavaScript is clientside';
    break;

    default;
      return 'i do not know';
    break;
  }


}
echo getLanguageUsage('javascript');

echo '<hr>';
//---------------------------------------------------


$age = 35;
$gender = 'female';
$employed = true;

if ($age > 34 && $employed == false) {
  echo 'boo';
}










echo '<hr>';
//---------------------------------------------------



$days_to_christmas = 315; 

while ($days_to_christmas > 0) {

echo 'There are still ' . $days_to_christmas . ' days to christmas:(' . '<br>';
$days_to_christmas--;

}
echo 'Hurray! It\'s Christmas!' . '<br>';

echo '<hr>';
//---------------------------------------------------

$days_to_christmas = 315; 

do {

echo 'There are still ' . $days_to_christmas . ' days to christmas:(' . '<br>';

$days_to_christmas--;

} while ($days_to_christmas > 0);


echo 'Hurray! It\'s Christmas!' . '<br>';
//---------------------------------------------------


echo '<hr>';


for ($days_to_christmas = 315; $days_to_christmas > 0; $days_to_christmas--) {
  echo 'There are still ' . $days_to_christmas . ' days to christmas:(' . '<br>';
}

echo '<hr>';
//----------Odd digits------------------------------------------



for ($i = 0; $i < 10; $i++){
  if($i % 2 == 0) continue;

  echo $i . '<br>';
}
echo '<hr>';

//------Odd digits until sum is smaller than 5----------------------------------------------

$sum = 0;

for ($i = 0; $i < 10; $i++){
  if($i % 2 == 0) continue;
  if($sum > 5) break;
  $sum += $i;
  echo $i . '<br>';
}
echo '<hr>';

//-----------Foreach-----------------------

$array = [1, 2, 3, 4];

foreach($array as $value) {
    echo $value . '<br>';
}






?>