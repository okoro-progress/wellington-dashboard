<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'well';

$conn = new mysqli( $servername, $username, $password, $dbname);

if($conn-> connect_error){
    echo "connection failled ". $conn->connect_error;
}