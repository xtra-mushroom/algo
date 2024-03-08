<?php
echo "Enter Your Triple Numbers: ";
$nums = fgets(STDIN);
$num = explode(" ",$nums);

$a = $num[0];
$b = $num[1];
$c = $num[2];

if(($a>$b AND $a<$c) OR ($a<$b AND $a>$c)){
    $mid = $a;
}elseif(($b>$a AND $b<$c) OR ($b<$a AND $b>$c)){
    $mid = $b;
}elseif(($c>$a AND $c<$b) OR ($c<$a AND $c>$b)){
    $mid = $c;
}else{
    $mid = "Not Found! Please enter unequal numbers";
}

echo "First number : $a".PHP_EOL;
echo "Second number: $b".PHP_EOL;
echo "Third number : $c".PHP_EOL;
echo "Mid number   : $mid";
?>
