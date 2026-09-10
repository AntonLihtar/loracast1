<?php

$heading = "Notes";

$config = require 'config.php';
$db = new Database($config['database'], 'root', 'mysqlroot');

$posts = $db->query("select * from notes")->get();

//dd($posts);

require "views/notes.view.php";





















