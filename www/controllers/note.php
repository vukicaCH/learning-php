<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = 'Note';

$note = $db->query("SELECT * FROM notes WHERE id = :id",
    [
        'id' => $_GET['id']
    ]
)->findOrFail();

if(!$note){
    abort();
}

$currentUserId = 4;

authorize($note['user_id'] === $currentUserId);

require "views/note.view.php";