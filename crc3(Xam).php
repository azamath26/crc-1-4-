<?php
//1
$arr ['A', 'B','C'];
echo var_dump($arr);
//2
echo $arr [1], [3];
//3
$arr ['a' , 'b', 'c', 'd'];
echo $arr [0] . "+" . $arr [1] . " " . $arr [3] . "+" . $arr [4] . " " . $arr [0] . "-" . $arr [4] . " " . $arr [0] . "/" . $arr [4];
//4
$arr ['2', '5', '3', '9'];
$result = $arr[0] * $arr[1] + $arr[3] * $arr[4];
echo $result;


