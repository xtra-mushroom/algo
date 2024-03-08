<?php
$totalJarak = 1000;
$kecepatanAwalAli = 2;
$intervalKecepatanAli = 0.1;
$kecepatanBedu = 3;

$waktuAli = 0;
$jarakTempuhAli = 0;

while($jarakTempuhAli < $totalJarak){
    $jarakTempuhAli += $kecepatanAwalAli * 10;
    $kecepatanAwalAli += $intervalKecepatanAli;
    $waktuAli += 10;
}

$waktuBedu = ceil($totalJarak / $kecepatanBedu);
$selisihWaktu = $waktuBedu - $waktuAli;

$jam = floor($selisihWaktu / 3600);
$menit = floor(($selisihWaktu % 3600) / 60);
$detik = $selisihWaktu % 60;

$pukul = date('H:i:s', strtotime("08:00:00") + $selisihWaktu);

echo "Waktu saat Bedu menyalip Ali adalah: $pukul";
?>
