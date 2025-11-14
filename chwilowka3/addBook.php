<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <nav id="add">
        <h2><a href="index.php" style="color: black; text-decoration: none;">Katalog</a></h2>
        <h2><a href="addBook.php" style="color: black;">Dodaj</a></h2>
    </nav>
    <div id="book">
    <form action="" method="POST">
        <h1>Dodaj książkę</h1>
        <label for="Tytul">Tytuł:</label>
        <input name="Tytul" type="text" placeholder="Wpisz tytuł książki" required>
        <label for="Autor">Autor:</label>
        <input name="Autor" type="text" placeholder="Wpisz nazwę autora" required>
        <label for="kat">Kategoria:</label>
        <select required name="kat">
            <option>Wybierz kategorie</option>
            <option>Komedia</option>
            <option>Psychologiczna</option>
            <option>Psychologiczny horror</option>
            <option>Fantazy</option>
            <option>Autobiografia</option>
            <option>Romans</option>
            <option>Sci-Fi</option>
            <option>Dokumentarz</option>
        </select>
        <label for="cena">Cena:</label>
        <input type="number" name="cena">
        <button type="submit" value="Wyślij">Wyślij</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
$Autor = $_POST['Tytul'];
$Tytul = $_POST['Autor'];
$kat = $_POST['kat'];
$cena = $_POST['cena'];
echo "<p>Autor: <strong>" . $Autor . "</strong></p>";
echo "<p>Tytuł: <strong>" . $Tytul . "</strong></p>";
echo "<p>Kategoria: <strong>" . $kat . "</strong></p>";
echo "<p>Cena: <strong>" . $cena . "</strong></p>";
$con = mysqli_connect("localhost", "root", "", "biblioteka");
$zapytanie = "INSERT INTO ksiazki (tytul, autor, kategoria, cena) VALUES ('$Tytul', '$Autor', '$kat', '$cena' )";
mysqli_query($con, $zapytanie);
mysqli_close($con);
}
?>
    </div>
    <div id="client">
        <h1></h1>
    </div>
</body>
</html>