<?php // pertemuan 2 soal 1, cara kedua
echo "Insert your time of departure (ex: 08:52:45): ";
$getTod = fgets(STDIN); 
echo "Insert your time of travel in second: ";
$tot = fgets(STDIN); // time of travel

$arrTod = explode(":", $getTod);
$tod = $arrTod[0]*3600 + $arrTod[1]*60 + $arrTod[2];
$toa = (int)$tod + (int)$tot; // time of arrival

$hour = $toa / 3600;
$min = ($toa % 3600) / 60;
$sec = ($toa % 3600) % 60;

echo "You'll arrive at: ".(int)$hour.":".(int)$min.":".$sec;