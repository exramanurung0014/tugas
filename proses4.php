<?php
$no1 = $_POST['txtbil1'];
$no2 = $_POST['txtbil2'];

$tunjangan = $no2*0.5;
$gajipokok = $tunjangan+$no2;

echo "NAMA=$no1 <br>" ;
echo "gaji= $no2 <br>";
echo "tunjangan = $tunjangan <br>";
echo "total gaji = $gajipokok <br>";


?>