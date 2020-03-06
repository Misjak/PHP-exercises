
--Exercise
--Write SQL to update the record in table city that has the column id with the value 3339.

--Set it's Name column to 'Prague'


UPDATE `city`
SET `Name` = 'Prague'
WHERE `id` = 3339

--Exercise
--Write SQL to update the record in table city that has the column id with the value 3339.

--Set it's Population column to 1294513

UPDATE `city`
SET `Population` = '1294513'
WHERE `id` = 3339


UPDATE `country`
SET `HeadOfState` = 'Donald J. Trump'
WHERE `GovernmentForm` = 'US Territory'

UPDATE `country`
SET `HeadOfState` = 'Donald J. Trump'
WHERE `HeadOfState` = 'George W. Bush'



UPDATE `country`
SET `Population` = 300,
      `GNP` = 13.91
WHERE `Name`= 'United States Minor Outlying Islands'