<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=moroco_travel', 'root', '');
//  var_dump($pdo);
} catch (PDOException $e) {
    echo 'erreur : ' . $e->getMessage();
}
?>