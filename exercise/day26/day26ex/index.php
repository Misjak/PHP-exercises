<?php 

require_once 'User.php';

$steve = new User('steve');

$steve->id = 1;
$steve->surname = 'Jobs';
$steve->name = 'Stephen';
$steve->username = 'Steve';

echo "The name of user {$steve->id} is {$steve->name}.<br>";

// var_dump($steve);
$steve->dumpMe();

$bob = new User('bob');
$bob->id = 2;
$bob->name = 'Robert';

$bob->dumpMe();
