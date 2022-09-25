<?php 

$nama = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>looping for Array</title>
<head>
<body>
    <h2>Daftar Negara ASEAN awal :</h2>
    <?php
    
        for ($i = 0; $i < count($nama); $i++) { 
            echo "<li>$nama[$i]</li>";
        }
    ?>
    <h2>Daftar Negara ASEAN baru :</h2>
    <?php

    $hasil = array_push($nama, "Laos", "Filipina", "Myanmar");
  
    for ($i = 0; $i < count($nama); $i++) { 
        echo "<li>$nama[$i]</li>";
    }
?>
</body>
</html>