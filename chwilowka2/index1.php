<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "uczen");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $zapytanie = "SELECT * FROM uczniowie";
    $wynik = mysqli_query($con, $zapytanie);
    if (!$wynik) {
        echo "Błąd zapytania: " . mysqli_error($con);
    } else {
        echo '<table>';
        echo '<tr><th>ID</th><th>Imie</th><th>Nazwisko</th><th>Klasa</th></tr>';

        while ($wiersz = mysqli_fetch_array($wynik)) {
            echo '<tr>';
            echo '<td>' . ($wiersz[0]) . '</td>';
            echo '<td>' . ($wiersz[1]) . '</td>';
            echo '<td>' . ($wiersz[2]) . '</td>';
            echo '<td>' . ($wiersz[3]) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

    mysqli_close($con);
    ?>

    <h1>123</h1>
    <section>
    </section>
</body>
</html>