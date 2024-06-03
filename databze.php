!doctype html>
<html lang="cz">
<head>
  <link href="styles.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/icons8-hennessey-venom-30.png">
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JDM Cars</title>

  <style>
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
      }

  input[type=text], input[type=number], input[type=date]  {
    border: 1px solid #000;
    border-radius: 15px; /* zaokrouhlí rohy */
    padding: 8px;
    background: #674367;
    color: white;
  }

  input[type=submit]{
    border: 1px solid #000;
    border-radius: 15px; /* zaokrouhlí rohy */
    padding: 10px;
    background: #674367;
    color: white;
    font-size: large;
  }
      ::placeholder {
          color: aliceblue;
          opacity: 0.7;
      }
  </style>

</head>

<header>
  <div class="navbar">
    <a href="#main">Main</a>
    <a href="./#uvod">Nejpopularnějši auta</a>
    <a href="./#historie">Historie</a>
    <a href="modely.html" target="_blank">Modely</a>
    <a href="osobnosti.html" target="_blank">Osobnosti</a>
      <a href="delete.php">Databaze aut</a>
    <a href="./PongGame/Pong.html" target="_blank">MiniHra</a>
  </div>
</header>

<body>

<div id="main" class="main">
  <div class="mainBox">
    <div class="mainText">

      <h1>JDM</h1>
      <h2>CARS</h2>
      <h3>Japanese domestic market</h3>
      <img class="arrowDown" src="./img/arrow-down-white.png" alt="Arrow down">
    </div>
  </div>
</div>


<div id="uvod" class="grid-container2">
  <div class="grid-item">
    <form action="" method="post">
      <label for="carFactory"><h2>Vyrobce:</h2></label>
      <input type="text" id="carFactory" name="carFactory" placeholder="Toyota">
      <label for="carModel"><h2>Model auta:</h2></label>
      <input type="text" id="carModel" name="carModel" placeholder="Supra">
      <label for="EnginePower"><h2>Vykon motoru:</h2></label>
      <input type="number" id="EnginePower" name="EnginePower" min="0" max="2500" placeholder="1750">
      <label for="carPrice"><h2>Cena:</h2></label>
      <input type="number" id="carPrice" name="carPrice" min="0" max="99999999">
      <label for="carYear"><h2>Rok vyroby:</h2></label>
      <input type="date" id="carYear" name="carYear" placeholder="1.1.2000"><br><br>
      <input type="submit" id="pridatAuto" value="Přidat auto">
    </form>
  </div>
</div>
</body>
</html>

<?php
$conn = new mysqli;
include 'localConect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carFactory = $_POST['carFactory'];
    $carModel = $_POST['carModel'];
    $EnginePower = $_POST['EnginePower'];
    $carPrice = $_POST['carPrice'];
    $carYear = $_POST['carYear'];

    $sql = "INSERT INTO car (carFactory, carModel, EnginePower, carPrice, carYear)
    VALUES ('$carFactory', '$carModel', '$EnginePower', '$carPrice', '$carYear')";
    if ($conn->query($sql) === TRUE) {
        //echo "Nové auto bylo úspěšně přidáno";
        echo "<script>alert('Auto bylo pridano do databaze')</script>";
    } else {
        echo "Chyba: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>