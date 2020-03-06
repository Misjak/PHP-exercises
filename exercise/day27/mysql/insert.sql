--Exercise
--Write SQL query to insert a row into the region table (it has columns id, name and slug) and execute it.

--The values will be:

--'Eastern Europe' for name
--'eastern-europe' for slug
--no mention of id, in the columns or values

-- Insert rows into table 'TableName'
INSERT 
INTO `region`
(`name`, `slug`) 
VALUES 
('Eastern Europe', 'eastern-europe')

-- 2nd

INSERT 
INTO `region`
(`name`, `slug`) 
VALUES 
('Western Europe', 'western-europe')

--Exercise
--Write SQL query to insert 3 more rows into the region table and execute it.

--The values will be (name and slug):

--'North America' and 'north-america'
--'Central America' and 'central-america'
--'South America' and 'south-america'

INSERT
INTO `region`
(`name`, `slug`)
VALUES
('North America' , 'north-america'),
('Central America', 'central-america'),
('South America', 'south-america')



