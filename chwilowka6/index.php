<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Koło szachowe gambit piona</h1></header>
    <nav>
        <h3>Polecane linki</h3>
        <ul>
            <li><a href="kw1.png">kwerenda1</a></li>
            <li><a href="kw2.png">kwerenda2</a></li>
            <li><a href="kw3.png">kwerenda3</a></li>
            <li><a href="kw4.png">kwerenda4</a></li>
        </ul>
        <img srcset="szachy.png">
    </nav>
    <main>
        <h2>Najlepszi gracze naszego koła</h2>
    <table>
        <tr>
            <th>Pozycja</th>
            <th>Pseudonim</th>
            <th>Tytuł</th>
            <th>Ranking</th>
            <th>Klasa</th>
        </tr>
        <?php
        $con = mysqli_connect("localhost", "root", "", "szachy");
        $wynik = mysqli_query($con, "SELECT * FROM `zawodnicy` ORDER BY `ranking` DESC LIMIT 10;");
        while ($wiersz = mysqli_fetch_array($wynik)) {
        echo "<tr>";
        echo "<td>" . $wiersz['id_zawodnika'] . "</td>";
        echo "<td>" . $wiersz['pseudonim'] . "</td>";
        echo "<td>" . $wiersz['tytul'] . "</td>";
        echo "<td>" . $wiersz['ranking'] . "</td>";
        echo "<td>" . $wiersz['klasa'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>
        <button type="submit" value="random">Wylosuj kolejną parę</button><br>
        <?php
        $random = mysqli_query($con, "SELECT id_zawodnika, pseudonim FROM `zawodnicy` ORDER BY RAND() LIMIT 2");
        while ($randomwiersz = mysqli_fetch_array($random)) {
            echo "<span>" . $randomwiersz['id_zawodnika'] . " " . $randomwiersz['pseudonim'] ."</span>  ";
        } 
        mysqli_close($con);
        ?>
        <p>Legenda: AM - Absolutny Mistrz, SM - Szkolny Mistrz, PM - Mistrz Poziomu, KM - Mistrz Klasowy</p>
    </main>
    <footer><h1>Stronę zrobił: 00000000000000</h1></footer>
</body>
</html>