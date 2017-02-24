<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=sma47';
    $username = 'sma47';
    $password = '7NZCKgJNm';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
