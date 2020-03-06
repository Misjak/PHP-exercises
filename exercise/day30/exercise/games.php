<?php


require_once 'DB.php';

//connect to the database 

DB::connect ('localhost', 'games', 'root', 'rootroot');


// select all games

$select_games_query = "
  SELECT `games` .*
  FROM `games`
  ORDER BY `name` ASC  
";

$games = DB::select($select_games_query );
//var_dump($games);



// go through all the selected games and grab their ids
// making an array of ids

$game_ids = []; // array of game ids, initialized as empty array
foreach ($games as $game) {
  $game_ids[] = $game->id; // add the id property of the current $game
                          // as the next element of the array $game_ids
}

//var_dump($game_ids);


// for the purpose of the next wuery, we need a string
// looking like this: '?,?,?,?'. Make it!

//var_dump( count ($games));
//var_dump( array_fill(0, count ($games), '?' )); // starting indes, how many elements, value
// var_dump( join (', ', ['apple', 'banana', 'orange'])); //  limiter ,array, - vrati string rozdeleny s ciarkou a medzerou
$question_marks =  join (', ', array_fill(0, count ($games), '?' ));


//use the string '?,?,?,?' and the array of ids
// to select all the generes for the games and select them!

$select_genres_query = "
  SELECT `game_genre` . `game_id`, `genres` . *
  FROM `game_genre`
  LEFT JOIN `genres` 
    ON `game_genre` . `genre_id` = `genres` . `id`
  WHERE `game_genre` . `game_id` IN ({$question_marks})

";
//var_dump($select_genres_query);
                    //query containing 6qmarks     array of 6 elements
$genres = DB::select($select_genres_query,        $game_ids);

//var_dump($genres);

// loop through the selected genres and create another array
// in which the genres will be indexed by the game ids
// (for easier access to the right generes for a specitfic game) 

$genres_for_games = [];
foreach ($genres as $genre) {

  $genres_for_games[$genre->game_id][] = $genre;

}
//var_dump($genres_for_games);


// profit! (= be able to output the together, easily)

foreach ($games as $game) { 
  $game->genres = $genres_for_games[$game->id];
}
header('Content-type: application/json');

echo json_encode($games);