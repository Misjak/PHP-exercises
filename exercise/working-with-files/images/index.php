<?php 

var_dump( pathinfo( __FILE__ ) );
 
var_dump( basename( __FILE__ ) );
var_dump( dirname( __FILE__ ) );

$contents = scandir( __DIR__ );

// var_dump( $contents );

$handle = opendir( __DIR__ );
// handle is a directory handle represnting a folder being opened


while ($file = readdir($handle) ) {
  var_dump($file);
};

closedir($handle);

// mkdir('2020');

var_dump(is_dir('2019'));

var_dump(file_exists('photos.txt'));

// opens file for reading 'r'
fopen('photos.txt', 'r');

$line = fgets($handle);

var_dump($line);

fclose($handle);

