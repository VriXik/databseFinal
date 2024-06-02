<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dat_3b";

// Vytvoření spojení
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola spojení
if ($conn->connect_error) {
    die("Spojení se nezdařilo: " . $conn->connect_error);
}