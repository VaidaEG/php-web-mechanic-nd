<?php
/*
Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skirtingas formas- vieną
GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik
tikrindami pačius masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET
formos ir geltonai- kai iš POST.
*/
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = 'yellow';
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $color = 'green';
}
// if (isset($_GET['get'])) {
//     $color = 'green';
// }
// if (isset($_POST['post'])) {
//     $color = 'yellow';
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND6</title>
</head>
<body style="background: <?= $color ?>; display: flex; justify-content: center;">
<form action="" method="get">
<button type="submit" name="get">Green</button>
</form>
<form action="" method="post">
<button type="submit" name="post">Yellow</button>
</form>
</body>
</html>