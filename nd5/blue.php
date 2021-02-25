<?php
/*
Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save
(abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant linko puslapis ne
tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą
puslapį (iš raudono į mėlyną ir atvirkščiai).
*/
?>
<?php
_d($_GET);
if (isset($_GET['link'])) {
    header('location:http://localhost/php-web-mechanic-nd/nd5/red.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND5</title>
</head>
<body style="background-color:blue;">
<a href="?link=1">BLUE<a>
</body>
</html>