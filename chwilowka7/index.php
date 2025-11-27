<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Malowanie i gipsowanie</h1></header>
    <aside>
        <img srcset="tapeta_lewa.png"><img class="horizontal" srcset="tapeta_lewa.png">
        </aside>
    <main>
        <nav>
    <span><a href="kontakt.html">Kontakt</a><a href="Partnerzy.html">Partnerzy</a></span>
</nav>
        
        <section class="mainbottomright">
        <h2>Dla klientów</h2>
        <form action="" method="POST">
        <label for="minprac">Ilu co najmniej pracowników potrzebujesz?</label><br>
        <input type="number" name="minprac">
        <button type="submit" value="Szukaj" name="searchfirma">Szukaj firm</button>
        </form>
        <table>
            <tr>
                <th>Dostępne firmy</th>
                <th>Liczba pracowników</th>
            </tr>
        <?php
         $conn = mysqli_connect("localhost", "root", "", "remonty");
        $pracownicy = $_POST['minprac'];
        $wynik = mysqli_query($conn, "SELECT nazwa_firmy, liczba_pracownikow FROM wykonawcy WHERE liczba_pracownikow >= $pracownicy");
        while ($wiersz = mysqli_fetch_array($wynik)) {
            echo "<tr><td>" . $wiersz[0] ."</td><td>" . $wiersz[1] . "</td></tr>";
        }
        ?> 
</section>
        <section class="mainbottomleft">
        <h2>Dla wykonawców</h2>
        <form action="" method="POST">
            <select name="miasto">
                <?php 
                    $miastosearch = mysqli_query($conn, "SELECT miasto FROM klienci");
                    while ($opcja = mysqli_fetch_array($miastosearch)) {
                        echo "<option value='" . $opcja['miasto'] . "'>" . $opcja['miasto'] . "</option>";
                    }    
                ?>
                </select><br>
                <label for="kat">Malowanie</label>
                <input type="radio" name="kat" value="malowanie"><br>
                <label for="kat">Gipsowanie</label>
                <input type="radio" name="kat" value="gipsowanie"><br>
                <button type="submit" value="Szukaj" name="searchklient">Szukaj klientów</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $miasto = $_POST['miasto'];
        $rodzaj = $_POST['kat'];
        $dost = ($conn, "SELECT imie, zlecenia.miasto, zlecenia.rodzaj, zlecenia.cena") 
        }
        ?>
        </section>
    </main>
    <footer><h3>Stronę wykonał: 000000000000000</h3></footer>
</body>
</html>