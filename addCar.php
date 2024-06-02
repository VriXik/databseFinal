<?php
$conn = new mysqli;
include 'localConect.php';

$carFactory = $_POST['carFactory'];
$carModel = $_POST['carModel'];
$EnginePower = $_POST['EnginePower'];
$carPrice = $_POST['carPrice'];
$carYear = $_POST['carYear'];

$sql = "INSERT INTO car (carFactory, carModel, EnginePower, carPrice, carYear)
VALUES ('$carFactory', '$carModel', '$EnginePower', '$carPrice', '$carYear')";

if ($conn->query($sql) === TRUE) {
    echo "Nové auto bylo úspěšně přidáno";
} else {
    echo "Chyba: " . $sql . "<br>" . $conn->error;
}

$conn->close();

