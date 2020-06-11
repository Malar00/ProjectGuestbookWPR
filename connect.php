<?php
$servername = "localhost";
$username = "s20701";
$password = "Jan.Sita";

try {
    $conn = new PDO("mysql:host=$servername;dbname=s20701", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}