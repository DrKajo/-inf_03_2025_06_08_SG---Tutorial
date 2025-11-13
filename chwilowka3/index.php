<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Księgarnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Biblioteka Rodaka</h1></header>
    <nav>
        <h2><a href="index.php" style="color: black;">Katalog</a></h2>
        <h2><a href="addBook.php" style="color: black; text-decoration: none;">Dodaj</a></h2>
    </nav>
    <main>
      <?php
$con = mysqli_connect("localhost", "root", "", "biblioteka");
 $zapytanie1 = "SELECT * FROM ksiazki";
$wynik = mysqli_query($con, $zapytanie1);
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Tytuł</th>";
echo "<th>Autor</th>";
echo "<th>Kategoria</th>";
echo "<th>Cena</th>";
echo "</tr>";
while ($wiersz = mysqli_fetch_array($wynik)) {
    echo "<tr>";
    echo "<td>" . $wiersz['id'] . "</td>";
    echo "<td>" . $wiersz['tytul'] . "</td>";
    echo "<td>" . $wiersz['autor'] . "</td>";
    echo "<td>" . $wiersz['kategoria'] . "</td>";
    echo "<td>" . $wiersz['cena'] . "zł</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
    </main>
    <footer><h2>Bobowa 2025</h2></footer>
</body>
</html>