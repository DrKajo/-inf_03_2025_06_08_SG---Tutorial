<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odbierz</title>
</head>
<body>
<?php
if ($_SERVER ["REQUEST_METHOD" == "POST"]) {
$id = $_POST['id'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
echo "id: " .$id ." Imię: ". $imie ." Nazwisko: ". $nazwisko;
}
else {
    echo "Formularz nie został wypełniony poprawnie"
}
?>
</body>
</html>