<?php
$host = 'localhost';
$user = "root";
$password = '';

$dbname = 'led_android';

$db = mysqli_connect($host, $user, $password, $dbname);

if (mysqli_error($db)) {
    echo 'error' . PHP_EOL;
    echo mysqli_error($db);

    die();
}
