<?php
/*
Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku
GET metodu formoje.
*/
?>
<?php
$color = isset($_GET['color'])? '#' . $_GET['color'] : 'black';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND3</title>
</head>
<body style="background:<?= $color ?>;">
    <form action="" method="get" style="display: flex; justify-content: center;">
        <input type="text" name="color" value="">
        <button type="submit">CHANGE COLOR</button>
    </form>
</body>
</html>