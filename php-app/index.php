<?php

require "functions.php";

require "router.php";

$dsn = "mysql:host=localhost;port=3306;dbname=php_test;";

$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);