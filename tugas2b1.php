<?php // pertemuan 2 soal 2, cara pertama
echo "Insert your time of departure (ex: 08:52:45): ";
$getTod = fgets(STDIN); 
echo "Insert your time of arrival (ex: 12:15:10): ";
$getToa = fgets(STDIN);

$tod = strtotime($getTod); // time of departure
$toa = strtotime($getToa); // time of arrival
$tot = $toa - $tod; // time of travel
$travel = date("H:i:s", $tot);

echo "Your travel time is: " . $travel;