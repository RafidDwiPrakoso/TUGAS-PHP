<?php
 $data = [80, 90, 75, 100, 85, 100, 66];
 $total = 100;

 $cari = array_count_values($data);

 echo "Total data $total = " . ($cari[$total] ?? 0) . "<br>";
?>