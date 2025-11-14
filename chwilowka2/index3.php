<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Formularz</title>
</head>
<body>
<form action="" method="POST">
    <label>Imię:</label><br>
    <input type="radio" name="imie" value="Jan">Jan<br>
    <input type="radio" name="imie" value="Anna">Anna<br>
    <input type="radio" name="imie" value="Marek">Marek<br>
    <label>Nazwisko:</label><br>
    <input type="radio" name="nazwisko" value="Kowalski">Kowalski<br>
    <input type="radio" name="nazwisko" value="Wiśniewski">Wiśniewski<br>
    <input type="radio" name="nazwisko" value="Nowak">Nowak<br>
    <button type="submit" value="Wyślij">Wyślij</button>
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$imie = $_POST['imie'];
echo "<p>Imię: <strong>" . $imie . "</strong></p>";
$con = mysqli_connect("localhost", "root", "", "uczen");
 $zapytanie1 = "SELECT * FROM students WHERE imie ='$imie'";
 $zapytanie2 = "SELECT * FROM students WHERE nazwisko ='$nazwisko'";
$wynik = mysqli_query($con, $zapytanie1);
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Imię</th>";
echo "<th>Nazwisko</th>";
echo "</tr>";
while ($wiersz = mysqli_fetch_array($wynik)) {
    echo "<tr>";
    echo "<td>" . $wiersz['id'] . "</td>";
    echo "<td>" . $wiersz['imie'] . "</td>";
    echo "<td>" . $wiersz['nazwisko'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
 }

?>
</body>
</html>