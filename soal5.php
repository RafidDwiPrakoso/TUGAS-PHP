<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $angka1 = [80, 77, 65, 89, 55, 12, 90, 86];
     $angka2 = [77, 99, 55, 81, 45, 90, 91, 98];

     $angkasama = array_intersect($angka1,$angka2);
     $angkabeda = array_diff($angka1, $angka2);

     echo "Bilangan yang ada di kedua variabel " . implode(", ",$angkabeda) . "<br>";
     echo "Bilangan yang tidak ada di kedua variabel " . implode(", ", $angkasama);
    ?>
</body>
</html>