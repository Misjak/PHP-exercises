<?php

// Using the database world write and execute a SQL query that would select all records int the table countrylanguage that have 'English' in their Language column and left join the appropriate records in the country table using the CountryCode column.


SELECT `city` .* , `country` .*
FROM `city`
LEFT JOIN  `country`
  ON `city` . `CountryCode` = `country` .  `CountryCode


  // Exercise
  // Using the database world write and execute a SQL query that would select all records int the table countrylanguage that have 'English' in their Language column and left join the appropriate records in the country table using the CountryCode column.
  
SELECT *
FROM `countrylanguage` 
LEFT JOIN  `country`
  ON `countrylanguage`.`CountryCode` = `country`.`Code`
WHERE `countrylanguage`.`Language` = 'English'



  // Exercise (optional)
  // Exercise (optional)
  // Using the database imdb_test, write an SQL query that would select all genre names for a specific movie in a single query.




  // Exercise (optional)
  // Exercise (optional)
  // Using the database imdb_test, write an SQL query that would select all actors (profession_id = 3) for a specific movie in a single query.
