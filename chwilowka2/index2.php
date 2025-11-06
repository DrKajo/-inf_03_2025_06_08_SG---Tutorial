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
    <label>ID:</label>
    <input type="number" name="id">
    <label>Imię:</label>
    <input type="text" name="imie">
    <label>Nazwisko:</label>
    <input type="text" name="nazwisko">
    <button type="submit" value="Wyślij">Wyślij</button>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id = $_POST['id'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
echo "id: " .$id ." Imię: ". $imie ." Nazwisko: ". $nazwisko;
}
?>
</form>
</body>
</html>