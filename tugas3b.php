<?php 
echo " _____________________________________________".PHP_EOL;
echo "| Nama  : Maulida Hikmah                      |".PHP_EOL;
echo "| NIM   : 2311601484                          |".PHP_EOL;
echo "| Kelas : XB                                  |".PHP_EOL;
echo "| MK    : Perancangan dan Analisis Algorirma  |".PHP_EOL;
echo "|_____________________________________________|".PHP_EOL.PHP_EOL;
echo "Please enter your triple numbers: ";
$nums = fgets(STDIN);
$num = explode(" ",$nums);

if(count($num)==3){
    $a = $num[0];
    $b = $num[1];
    $c = $num[2];

    if($a == $b && $a == $c && $b == $c){
        $triangle = "Equilateral (Sama Sisi)";
    }elseif($a != $b && $a != $c && $b != $c){
        $triangle = "Scalene (Sembarang)";
    }else{
        $triangle = "Isosceles (Sama Kaki)";
    }

    echo "Side 1: $a".PHP_EOL;
    echo "Side 2: $b".PHP_EOL;
    echo "Side 3: $c".PHP_EOL;
    echo "Triangle type : $triangle";
}else{
    echo "Please put exactly three numbers!";
}



?>