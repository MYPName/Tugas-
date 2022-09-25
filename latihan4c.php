<?php

$ibukota = [
    "Indonesia" => "D.K.I Jakarta",
    "Singapura" => "Singapura",
    "Malaysia"  => "Kuala Lumpur",
    "Brunei"    => "Bandar Srei Begawan",
    "Tahiland"  => "Bangkok",
    "Laos"      => "Vientiane",
    "Filipina"  => "Manila",
    "Myanmar"   => "Naypyidaw"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
    <?php foreach ($ibukota as $nrp => $nama): ?> 
        <li><?php echo "$nrp : $nama" ?></li>
    <?php endforeach ?>

</body>
</html>