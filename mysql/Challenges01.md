READING DATA FROM YOUR DATABASE TABLE
1 
SELECT * FROM graduates;
2
SELECT full_name FROM graduates WHERE age < 35;
3
SELECT full_name FROM graduates WHERE location = 'Bedminster';
4
SELECT full_name FROM graduates WHERE full_name LIKE 'Simon%';
Tricksy
SELECT AVG(age) AS AverageAge FROM graduates;

CHANGING TABLES
1
ALTER TABLE graduates ADD COLUMN favourite_beverage TEXT;
2
UPDATE graduates
    SET favourite_beverage = (
        CASE 
            WHEN full_name = 'Oli Ward' then 'coffee'
            WHEN full_name = 'Simon Capet' then 'coffee'
            WHEN full_name = 'Simon New' then 'tea'
            WHEN full_name = 'Kasia Pranke' then 'water'
            WHEN full_name = 'Josh Simons' then 'herbal tea'
    end);

Tricksy
1
ALTER TABLE graduates 
ADD COLUMN last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;


PLANNING AND CREATING TABLES

1
Owners/
Columns
id INT(11) PRIMARY KEY, name VARCHAR(100), account_number INT(11)

Animals/
Columns
id INT(11) PRIMARY KEY, owner_id INT(11) FOREIGN KEY, name VARCHAR(100)

Procedures/
Columns
id INT(11) PRIMARY KEY, name VARCHAR(100), severity VARCHAR(100), date DATE, cost INT(11)

CREATE DATABASE vets;
USE DATABASE vets;

CREATE TABLE Owners(
    id INT(11) PRIMARY KEY,
    name VARCHAR(100),
    account_number INT(11)
) ENGINE=INNODB;

CREATE TABLE Animals(
    id INT(11) PRIMARY KEY,
    name VARCHAR(100),    
    parent_id INT,
    FOREIGN KEY (parent_id)
        REFERENCES Owners(id)
        ON DELETE CASCADE
        <!-- ON DELETE CASCADE = If a user gets deleted, delete everything that it owns -->
) ENGINE=INNODB;