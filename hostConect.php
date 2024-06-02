<?php
$servername = "zpt.h.filess.io";
$username = "dat3b_raysfaster";
$password = "bde4e3425c003b613e157df7a2cd58d22061e15b";
$dbname = "dat3b_raysfaster";

// Vytvoření spojení
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola spojení
if ($conn->connect_error) {
    die("Spojení se nezdařilo: " . $conn->connect_error);
}