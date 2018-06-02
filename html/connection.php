<?php

$dns      = 'mysql:host=db;port=3306;dbname=sandbox';
$user     = 'root';
$password = 'root';

try {

    $pdo = new PDO($dns, $user, $password);
    echo 'Connection success';

} catch (PDOException $e) {

    echo 'Connection failed: ' . $e->getMessage();

}