<?php 
echo "Please insert 5 numbers to be summed up (ex: 1 2 3 4 5): ";
$numbers = fgets(STDIN);

$number = explode(" ", $numbers);
if(count($number)<5){
    echo "Please insert at least 5 numbers";
}elseif(count($number)>5){
    echo "Please insert maximum 5 numbers";
}else{
    $result = array_sum($number);
    echo "Result: $result";
}


