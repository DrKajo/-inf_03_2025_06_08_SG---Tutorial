<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPONY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <aside>
            <?php 
            $conn = mysqli_connect('localhost', 'root', '', 'opony');
            $zapytanie1 = "SELECT * FROM opony ORDER BY cena ASC LIMIT 10";
            $wyniki = mysqli_query($conn, $zapytanie1);
            while ($rekord = mysqli_fetch_array($wyniki)) {
                $producent = $rekord['producent'];
                $model = $rekord['model'];
                $sezon = $rekord['sezon'];
                $cena = $rekord['cena'];
                if ($sezon == 'letnia') {
                    $obrazek = 'lato.png';
                } elseif ($sezon == 'zimowa') {
                    $obrazek = 'zima.png';
                } else {
                    $obrazek = 'uniwer.png';
                }
                echo "<div class='opona'>"; echo "<img src='$obrazek' alt='opona'>"; echo "<h4>Opona: $producent $model</h4>"; echo "<h3>Cena: $cena</h3>"; echo "</div>";
            }
            ?>
        </aside>
        <section id="top">
            <img srcset="opona.png">
            <?php 
            $zapytanie2 = 'SELECT producent, sezon, cena, model FROM `opony` WHERE nr_kat = 9;';
            $wyniki2 = mysqli_query($conn, $zapytanie2);
            $opona = mysqli_fetch_array($wyniki2);
            echo "<h2>{$opona['producent']} model {$opona['model']}</h2>";
            echo "<h2>Sezon: {$opona['sezon']}</h2>";
            echo "<h2>Tylko {$opona['cena']} zł!</h2>";
            ?>
        </section>
        <section id="bottom">
            <h1>Najnowsze zamówienie</h1>
            <?php 
            $zapytanie3 = 'SELECT zamowienie.id_zam, zamowienie.ilosc, opony.cena, opony.model FROM zamowienie JOIN opony ON zamowienie.nr_kat = opony.nr_kat ORDER BY RAND() LIMIT 1;';
            $wyniki3 = mysqli_query($conn, $zapytanie3);
            $rand = mysqli_fetch_array($wyniki3);
            $wartosc = $rand['ilosc'] * $rand['cena'];
            echo "<h2>{$rand['id_zam']} {$rand['ilosc']} sztuki modelu {$rand['model']}</h2>";
            echo "<h2>Wartość zamówienia {$wartosc} zł</h2>";
            ?>
        </section>
    </main>
    <footer><p>Stronę wykonał: 000000000000</p></footer>
</body>
</html>