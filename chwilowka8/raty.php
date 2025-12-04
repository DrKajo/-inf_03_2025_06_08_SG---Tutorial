<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <nav>
        <a href="index.php">Strona główna</a>
        <a href="raty.php">Koszt rat</a>
        <a href="partner.php">Nasz partner</a>
    </nav>
    <main>
    <h3>Oblicz miesięczną ratę</h3>
    <form onsubmit="return false;">
        <input class="kontrolki" id="react" type="checkbox" name="React" value="React"><label for="react">Kurs React.js</label><br>
        <input class="kontrolki" id="js" type="checkbox" name="JS" value="JS"><label for="js">Kurs JavaScript</label><br>
        <label for="LR">Liczba rat:</label>
        <input class="kontrolki" id="LR" type="number" name="LR" min="1"><br>
        <select class="kontrolki" id="miasto">
            <option value="Katowice">Katowice</option>
            <option value="Warszawa">Warszawa</option>
        </select><br>
        <button type="button" class="kontrolki" id="oblicz">Oblicz</button>
    </form>
    <p id="wynik"></p>
    <script>
        const PRICE_REACT = 5000;
        const PRICE_JS = 3000;
        function funkcja() {
            const wynikEl = document.getElementById('wynik');
            wynikEl.innerHTML = '';
            const reactChecked = document.getElementById('react').checked;
            const jsChecked = document.getElementById('js').checked;
            const liczbaRat = parseInt(document.getElementById('LR').value, 10);
            const miasto = document.getElementById('miasto').value;
            let total = 0;
            if (reactChecked) total += PRICE_REACT;
            if (jsChecked) total += PRICE_JS;

            if (total === 0) {
                wynikEl.textContent = 'Wybierz co najmniej jeden kurs.';
                return;
            }
            if (!liczbaRat || liczbaRat <= 0) {
                wynikEl.textContent = 'Podaj poprawną liczbę rat (większą niż 0).';
                return;
            }
            const rata = Math.round((total / liczbaRat) * 100) / 100;
            wynikEl.textContent = `Kurs odbędzie się w ${miasto}. Koszt całkowity: ${total} zł. Płacisz ${liczbaRat} rat po ${rata} zł`;
        }

        document.getElementById('oblicz').addEventListener('click', funkcja);
    </script>
    </main>
    <footer><p>Autor strony: 0000000000</p></footer>
</body>
</html>