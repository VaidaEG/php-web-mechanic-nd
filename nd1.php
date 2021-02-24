<?php
/*
Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su
failo vardu, o kita nuoroda su failo vardu ir GET duomenų perdavimo metodu
perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su
perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be
perduodamo kintamojo, vėl pasidarytų juodas.
*/
?>
<?php
// if (isset($_GET['color']) && $_GET['color'] == 1) {
//     $color = 'red'; 
// }
// else {
//     $color = 'black';
// }
$color = isset($_GET['color'])?'red':'Black';
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
<a href="http://localhost/php-web-mechanic-nd/nd1.php">Black</a>
<a href="http://localhost/php-web-mechanic-nd/nd1.php?color=1">Red</a>
</body>
</html>