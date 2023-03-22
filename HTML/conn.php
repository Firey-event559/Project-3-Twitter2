<?php


$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=localhost;dbname=database_kelvin", $username, $password);
}catch(PDOException $error){
    echo "Connection failed: " . $error->getMessage();
}

?>