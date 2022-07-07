<?php
include_once __DIR__ .'/film.php';

$top_gun = new Film('TopGun','Azione','Joseph Kosinski',2022);
$nostalgia = new Film('nostalgia','Drammatico','Mario Martone',2010);
$diabolik = new Film('diabolik','Giallo',' Antonio Manetti',2021);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Film</title>
</head>
<body>
    <div class="container"><?php
      echo $top_gun->Print() . $nostalgia->Print() . $diabolik->Print() ;

    ?></div>
</body>
</html>



