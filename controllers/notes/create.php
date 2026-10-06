<?php

$heading = 'Create Note';
require 'Validator.php';
$config = require 'config.php';

$db = new Database($config['database'], 'root', 'mysqlroot');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (!Validator::string($_POST['body'], 1, 300)) {
        $errors['body'] = 'A body of no more than 300 characters is required.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 5
        ]);
    }
}

require "views/notes/create.view.php";
