
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $x = (float)($_POST['x'] ?? 0);
    $y = (float)($_POST['y'] ?? 0);
    $suma = $x + $y;

    setcookie('Rezultatas', $suma);

    header('Location: http://localhost/php-web-mechanic-nd/calc.php');
    die;
    

}
if (isset($_COOKIE['Rezultatas'])) {
    $rez = $_COOKIE['Rezultatas'];
    setcookie('Rezultatas', '', time() - 555);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <h1>Skaičiuotuvas</h1>
    <h2>Rezultatas: <?= $rez ?? '---'?></h2>
    <form action="http://localhost/php-web-mechanic-nd/calc.php" method="post">
    <input type="text" name="x">
    <input type="text" name="y">
    <button type="submit">Sumuoti</button>
    </form>
</body>
</html>
