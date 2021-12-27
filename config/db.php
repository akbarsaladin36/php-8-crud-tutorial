<?php 

    $DATABASE_HOST = 'localhost';
    $DATABASE_USERNAME = 'root';
    $DATABASE_PASSWORD = '';
    $DATABASE_NAME = 'php_crud_tutorial';

    try {
        $db = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USERNAME, $DATABASE_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $err) {
        die("Something went wrong: " . $err->getMessage());
    }

?>