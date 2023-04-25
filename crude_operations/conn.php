<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'students_db';

    $conn = new mysqli($server, $username, $password, $dbname);
    if ($conn -> connect_errno) {
        die('Connection failed ' . $conn -> connect_errno);
    }
?>