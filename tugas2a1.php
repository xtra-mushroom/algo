<?php // pertemuan 2 saol 1, cara pertama
echo "Insert your time of departure (ex: 08:52:45): ";
$getTod = fgets(STDIN); 
echo "Insert your time of travel in second: ";
$tot = fgets(STDIN); // time of travel

$tod = strtotime($getTod); // time of departure
$toa = $tod + $tot; // time of arrival
$arrive = date("H:i:s", $toa);

echo "You'll arrive at: " . $arrive;