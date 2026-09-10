<?php

//---- практика по sql ---------------

/**
 * CREATE TABLE jobs
 * (
 * id     INT PRIMARY KEY AUTO_INCREMENT,
 * role   VARCHAR(20) NOT NULL,
 * name   VARCHAR(20) NOT NULL,
 * salary INT         NOT NULL
 * );
 *
 * INSERT INTO jobs (role, name, salary)
 * VALUES ('Developer', 'Ivan', 120000),
 * ('Manager', 'Anna', 150000),
 * ('Designer', 'Maria', 95000),
 * ('Developer', 'Alex', 130000),
 * ('Tester', 'Dmitry', 90000),
 * ('Manager', 'Olga', 145000),
 * ('Developer', 'Sergey', 125000),
 * ('Analyst', 'Elena', 110000),
 * ('Tester', 'Nikita', 85000),
 * ('Designer', 'Sofia', 100000);
 */

$config = require 'config.php';

$salary = $_GET['salary'] ?? 100000;

$db = new Database($config['database'], 'root', 'mysqlroot');

$query2 = "
select *
from jobs
where salary < :salary
";

$posts2 = $db->query($query2, [
    'salary' => $salary
])->fetchAll();

dd($posts2);