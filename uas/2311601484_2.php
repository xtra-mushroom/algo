<?php
function berpapasan() {
    $totalJarak = 1000;
    $kecepatanAwalAli = 2;
    $intervalKecepatanAli = 0.1;
    $kecepatanAwalBedu = 3;

    $waktuAli = 0;
    $posisiAwalAli = 0;
    $posisiAwalBedu = $totalJarak; //1000

    while($posisiAwalAli < $posisiAwalBedu){
        $posisiAwalAli += $kecepatanAwalAli;
        $kecepatanAwalAli += $intervalKecepatanAli;
        $posisiAwalBedu -= $kecepatanAwalBedu;
        $waktuAli++;
    }

    $waktuPapasan = date("H:i:s", strtotime("08:00:00") + $waktuAli);
    $jarakTitikPapasan = $posisiAwalBedu;

   return [$waktuPapasan, $jarakTitikPapasan];
}

list($waktuPapasan, $jarakTitikPapasan) = berpapasan();

echo "Ali dan Badu akan berpapasan pada $waktuPapasan".PHP_EOL;
echo "Jarak Badu dengan titik B setelah berpapasan: $jarakTitikPapasan meter";
?>
