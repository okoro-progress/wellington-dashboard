<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'well';

$conn = new mysqli( $servername, $username, $password, $dbname);

if($conn-> connect_error){
    echo "connection failled ". $conn->connect_error;
}


$projects = "SELECT COUNT(*) AS row_count FROM project;";
$clients = "SELECT COUNT(*) AS row_count_2 FROM client;";

$project_result = $conn->query($projects);
$client_result = $conn->query($clients);


if($project_result && $project_result->num_rows > 0){
    $project_row = $project_result->fetch_assoc();
    $project_count = $project_row["row_count"];
}else {
    $project_count = 0;
}





if ($client_result && $client_result->num_rows >0 ) {
    $client_row = $client_result->fetch_assoc();
    $client_count = $client_row["row_count_2"];
}else {
    $client_count = 0;
}





$conn->close();
?>