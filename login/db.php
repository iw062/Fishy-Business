<?php
// Fishy Business database connection

$host = '54.158.145.56';
$dbname = 'groupC';
$dbuser = 'groupC';
$dbpass = 'H9!rQ5mZ2#pD';

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname, 3306);

if (!$conn) {
    die('Database connection failed.');
}

mysqli_set_charset($conn, 'utf8mb4');
?>
