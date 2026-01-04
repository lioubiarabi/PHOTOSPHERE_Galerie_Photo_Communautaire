<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=photosphere", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "DB coonection error: " . $e->getMessage();
}

?>