<?php // pertemuan 2 soal 2, cara kedua
echo "Insert your time of departure (ex: 08:52:45): ";
$getTod = fgets(STDIN); 
echo "Insert your time of arrival (ex: 12:15:10): ";
$getToa = fgets(STDIN);

$arrTod = explode(":", $getTod);
$arrToa = explode(":", $getToa);
$tod = $arrTod[0]*3600 + $arrTod[1]*60 + $arrTod[2]; // time of departure
$toa = $arrToa[0]*3600 + $arrToa[1]*60 + $arrToa[2]; // time of arrival

$tot = (int)$toa - (int)$tod; // time of travel

$hour = $tot / 3600;
$min = ($tot % 3600) / 60;
$sec = ($tot % 3600) % 60;

echo "Your travel time is: ".(int)$hour.":".(int)$min.":".$sec;