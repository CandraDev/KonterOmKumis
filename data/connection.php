<?php

$databaseHost = 'localhost';
$databaseName = 'konter_omkumis'; // kuncinya, pastikan sesuai
$databaseUsername = 'root';
$databasePassword = '';

$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword,  $databaseName);
if ($connection) {
} else {
    echo "databes ga terhubung";
}
?>
