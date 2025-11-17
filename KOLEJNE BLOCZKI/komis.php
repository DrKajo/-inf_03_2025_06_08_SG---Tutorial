<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis samochodowy</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="header"><h1>Komis samochodowy</h1></div>
    <div id="nav">
        <h2>Akcja</h2>
        <ul>
        <li><a href="komis.php">Dodaj nowy pojazd</a></li>
        <li><a href="odc.php">Odczyt pojazdów</a></li>
        <li><a href=".php">Dodaj nowy pojazd</a></li>
        </ul>
    </div>
    <div id="main">
<form action="" method="POST">
    <label for="model">Model:</label>
    <input type="text" name="model">
    <label for="marka">Marka:</label>
    <input type="text" name="Marka">
    <button type="submit" value="Wyślij">Wyślij</button>
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$model = $_POST['model'];
$marka = $_POST['marka'];
echo "<p>Model: <strong>" . $model . "</strong></p>";
echo "<p>Marka: <strong>" . $marka . "</strong></p>";
$con = mysqli_connect("localhost", "root", "", "komis");
$zapytanie = "INSERT INTO auta (model, marka) VALUES ('$Model', '$Marka')";
mysqli_query($con, $zapytanie);
mysqli_close($con);
 }
?>
    </div>
    <div id="footer"></div>
</body>
</html>