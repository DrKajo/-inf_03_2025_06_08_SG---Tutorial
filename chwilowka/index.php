<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
    $con = mysqli_connect("localhost", "root", "", "uczen");
    $zapytanie = "SELECT * FROM students";
    $wynik = mysqli_query($con, $zapytanie);
    $wiersz = mysqli_fetch_array($wynik);
    echo $wiersz[1];
        ?>
    <h1>123</h1>
    <section>
        
    </section>
</body>
</html>