<?php

// foreach  : 배열의 길이만큼 루프하는 문법
// $arr = [1, 2, 3];
// echo count($arr);

/* for($i = 0; $i <= count($arr) - 1; $i++) {
    echo $arr[$i];
}*/
$arr2 = [
    "쿠로미" => "포도"
    , "마이멜로디" => "딸기"
    , "폼폼푸린" => "푸딩"

];



foreach ($arr2 as $key => $val) {
    echo "{$key} : {$val}\n";

}