<?php

$heading = "Note";
$currentUserId = 5;


$config = require 'config.php';
$db = new Database($config['database'], 'root', 'mysqlroot');

$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

if (!$note) {
    abort();
}

authorize($note['user_id'] === $currentUserId);



require "views/note.view.php";





















