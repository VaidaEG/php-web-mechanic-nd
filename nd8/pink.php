<?php
/*
Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. Į
pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. Formą
nukreipkite, kad ji atsidarinėtų rose.php puslapyje. Padarykite taip, kad surinkus
naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php
puslapį.
*/
?>
<?php
if (isset($_POST['post'])) {
    header ('Location: http://localhost/php-web-mechanic-nd/nd8/rose.php?noredirecting=1');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND8</title>
</head>
<body style="background-color: pink; display: flex; justify-content: center;">
<form action="" method="post">
    <input type="text" name="color">
    <button type="submit" name="post">GO TO ROSE</button>
</form>
</body>
</html>