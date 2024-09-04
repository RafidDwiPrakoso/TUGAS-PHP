<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 4 Kak Fema</title>
</head>
<body>
    <?php
    for ($Angka1 = 1; $Angka1 <= 2; $Angka1++){
        for ($Angka2 = 10; $Angka2 >= 1; $Angka2--) {
            echo "$Angka2 x $Angka1 = " . ($Angka1 * $Angka2) . "<br>";
        } 
        echo "<br>";
    }
    ?>
</body>
</html>