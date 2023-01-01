<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "pesca";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
$conn->query('SET NAMES utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
