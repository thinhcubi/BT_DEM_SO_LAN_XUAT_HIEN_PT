<?php

function Find($arr ,$value): int
{
    $count = 0;
    for($i=0 ; $i<count($arr) ; $i++){
        if($value === $arr[$i]){
            $count++;
        }
    } return $count;
}

$number = [12,14,25,12,67,12,78];
$count1 = Find($number,78);
echo "Mang :";
foreach ($number as $item){
    echo $item." ";
}
echo "<br>";
echo "So co lan xuat hien la: ". $count1;