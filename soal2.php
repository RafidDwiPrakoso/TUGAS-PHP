<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="jamkerja"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $jam = $_POST['jamkerja'];
    $uanglembur = 50000;
if ($jam <= 8) {
    echo "<br> ". "anda tidak lembur, anda bekerja selama =". $jam ;
} else if ($jam >= 8) {
    $uanglemburkecil = ($jam - 9) * 25000 ;
    $total = $uanglembur + $uanglemburkecil;
    $totaljam = $jam - 8;
    echo "anda lembur selama = ". $jam . "<br>";
    echo " jam total lembur = " . $total . "<br>";
    echo "anda bekerja =", $totaljam . " lebih" . "<br>";
}
}

?>
</body>
</html>