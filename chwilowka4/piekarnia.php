<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piekarnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><span><a href="kw1.png">KWERENDA 1</a></span><a href="kw2.png">KWERENDA 2</a></span><a href="kw3.png">KWERENDA 3</a></span><a href="kw4.png">KWERENDA 4</a></span></header>
    <div id="top">
        <h3>WITAMY</h3>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalne świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w regionach zagierskim i ozorkowskim.</p>
    </div>
    <div id="mid">
        <form action="" method="POST">
        <h4>Wybierz rodzaj wypieków:</h4>
        <select name="rodzaj">
            <option value="WYROBY CUKIERNICZE I CIASTKARSKIE">WYROBY CUKIERNICZE I CIASTKARSKIE</option>
            <option value="PIECZYWO ŻYTNIE">PIECZYWO ŻYTNIE</option>
            <option value="PIECZYWO DLA GASTRONOMII">PIECZYWO DLA GASTRONOMII</option>
            <option value="PIECZYWO MIESZANE">PIECZYWO MIESZANE</option>
            <option value="PIECZYWO MIESZANE (PSZENNO-ŻYTNIE)">PIECZYWO MIESZANE (PSZENNO-ŻYTNIE)</option>
            <option value="PIECZYWO PSZENNE (BUŁKOWE)">PIECZYWO PSZENNE (BUŁKOWE)</option>
            <option value="PIECZYWO PSZENNE (CHLEBOWE)">PIECZYWO PSZENNE (CHLEBOWE)</option>
            <option value="PIECZYWO PSZENNE WYBOROWE I MAŚLANE">PIECZYWO PSZENNE WYBOROWE I MAŚLANE</option>
            <option value="PIECZYWO PSZENNE (CHLEBOWE)">PIECZYWO WYBOROWE I PÓŁCUKIERNICZE</option>
            <option value="PIECZYWO ŻYTNIE">PIECZYWO ŻYTNIE</option>
            <option value="INNE">INNE</option>
</select>
            <button type="submit" value="Wybierz">Wybierz</button>
        </form>
        <?php 
        $con = mysqli_connect("localhost","root","","piekarnia");
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
         exit();
        }
        $rodzaj = $_POST['rodzaj'];
        $wynik = mysqli_query($con, "SELECT * FROM `wyroby` WHERE Rodzaj = '$rodzaj'");
        echo "<table>";
echo "<tr>";
echo "<th>Rodzaj</th>";
echo "<th>Nazwa</th>";
echo "<th>Gramatura</th>";
echo "<th>Cena</th>";
echo "</tr>";
while ($wiersz = mysqli_fetch_array($wynik)) {
    echo "<tr>";
    echo "<td>" . $wiersz['Rodzaj'] . "</td>";
    echo "<td>" . $wiersz['Nazwa'] . "</td>";
    echo "<td>" . $wiersz['Gramatura'] . "</td>";
    echo "<td>" . $wiersz['Cena'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
        ?>
    </div>
    <div id="bot"></div>
</body>
</html>