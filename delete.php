<!doctype html>
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
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {

            border: 1px solid white;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid white;
            color: white;
        }
        th {
            background-color: #674367;
        }
        a {
           color: aliceblue;
        }
    </style>

</head>

<header>
    <div class="navbar">
        <a href="./#main">Main</a>
        <a href="./#uvod">Nejpopularnějši auta</a>
        <a href="./#historie">Historie</a>
        <a href="modely.html" target="_blank">Modely</a>
        <a href="osobnosti.html" target="_blank">Osobnosti</a>
        <a href="databze.php">Pridat auto</a>
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

        // Pokud je nastaven parametr "delete", smažeme záznam
        if(isset($_GET['delete'])){
            $idToDelete = $_GET['delete'];
            $sql = "DELETE FROM dat_3b.car WHERE carID=$idToDelete";
            $conn->query($sql);
        }

        $sql = "SELECT carID, carFactory, carModel, EnginePower, carPrice, carYear FROM car";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Vyrobce aut</th><th>Model auta</th><th>Vykon motoru</th><th>Cena Auta</th><th>Rok vyroby</th><th></th></tr>";
            // výpis dat
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["carID"]."</td><td>".$row["carFactory"]."</td><td>".$row["carModel"]."</td><td>".$row["EnginePower"]."</td><td>".$row["carPrice"]."</td><td>".$row["carYear"]."</td>";
                echo "<td><a href='?delete=".$row["carID"]."'>Smazat</a></td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h1>DATABAZE NEOBSAHUJE ZADNE ZAZNAMY</h1>";
        }
        $conn->close();
        ?>
    </div>
</div>
</body>
</html>


