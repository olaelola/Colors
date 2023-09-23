<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "bdcolors";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("falhou" . $conn->connect_error);
}
?>