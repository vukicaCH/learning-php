<?php

require "functions.php";

require "router.php";

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);


dd($posts);
