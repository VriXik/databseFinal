<?php
$conn = new mysqli;
include 'localConect.php';


$sql = "SELECT carFactory, carModel, EnginePower, carPrice,carYear FROM car";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // výpis dat každého řádku
    while($row = $result->fetch_assoc()) {
        echo "Vyrobce auta: " . $row["carFactory"]. " - Model: " . $row["carModel"]. "- Vykon motoru: " . $row["EnginePower"]. "- Cena auta: " . $row["carPrice"]. "- Rok vyroby: " . $row["carYear"]. "<br>";
    }
} else {
    echo "0 výsledků";
}
$conn->close();
?>
