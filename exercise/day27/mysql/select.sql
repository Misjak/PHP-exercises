
-- demonstration
-- Write a SQL query to select everything from the table country

SELECT *
FROM `country`


--demonstration
--Write a SQL query to select everything from the table country with population above 20 000 000

SELECT *
FROM `country`
WHERE `population` > 20000000


--demonstration
--Write a SQL query to select everything from the table country with population above 20 000 000 and order it by population


SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC


--demonstration
--Write a SQL query to select everything from the table country with population above 20 000 000, order it by population and limit the results to first 10


SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 10

--Write a SQL query that would select only first 100 rows of the city table.

SELECT *
FROM `city`
LIMIT 100

--Write a SQL query that would select 100 rows of the city table with the best (biggest) Population value.

SELECT *
FROM `city`
ORDER BY `population` DESC
LIMIT 100

--Write a SQL query that would select all rows from the city table with the string Holland at the end of the District column.

SELECT *
FROM `city`
WHERE `District` LIKE '%Holland'

--Write a SQL query that would select all rows from the city table with the string ville anywhere within the Name column.

SELECT *
FROM `city`
WHERE `Name` LIKE '%ville%'

--Exercise
--Write an SQL query to select 10 largest cities (order by Population) from the city table that are in one of the V4 countries: Czechia, Slovakia, Poland, Hungary (their country is specified with their CountryCode column)

--Use IN

--The CountryCode values are: CZE, SVK, POL, HUN

SELECT *
FROM `city`
WHERE `CountryCode` IN ('CZE', 'SVK', 'POL', 'HUN')
ORDER BY `Population` DESC
LIMIT 10

