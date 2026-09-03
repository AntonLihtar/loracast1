<?php

require "functions.php";
// require "router.php";

require 'Database.php';


$config = require 'config.php';

$db = new Database($config['database'], 'root', 'mysqlroot');

$posts = $db->query("select * from posts where id = 13")->fetchAll();
//$post = $db->query("select * from posts where id = 13")->fetch();

dd($posts);

//foreach ($posts as $post) {
//    echo "<li>" . $post['title'] . "</li>";
//}
