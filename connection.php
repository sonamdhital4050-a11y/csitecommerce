<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db='csitecommerce';

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    echo 'Database connection failed';
}

?>