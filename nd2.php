<?php
/*
Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju
nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB
spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
*/
?>
<?php
$color = isset($_GET['color'])? '#' . $_GET['color'] : 'Black';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND1</title>
</head>
<body style="background:<?= $color ?>;">
<a href="http://localhost/php-web-mechanic-nd/nd2.php">Black</a>
</body>
</html>