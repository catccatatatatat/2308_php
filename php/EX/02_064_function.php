<?php
/*$numbers = [8, 50, 15, 20];
$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
}

echo "합계: " . $sum;*/
/*function sumNumbers(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum; 
}


$result = sumNumbers(8, 50, 15, 20);
echo "합계: " . $result;*/



/*function sumNumbers(...$numbers) {
    return array_sum($numbers);
}

$result = sumNumbers(8, 50, 15, 20);
echo "합계: " . $result;*/



/*function items(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo items(8, 50, 15, 20);*/
/*function items($n) {
    $sum = 0;
    foreach (range(1, $n) as $i) {
        $sum += $i;
    }
    return $sum;
}

$result = items(10000);
echo $result;*/

/*function items($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

$result = items(10000);
echo $result;*/


/* function items(...$numbers) 라인은 가변 인수를 받아들이는 함수를 정의,...$numbers 구문은 여러 개의 인수를 배열 $numbers로 묶어줌
$sum = 0; 라인에서는 총합을 저장하기 위한 변수 $sum을 초기화 함
foreach ($numbers as $number) 루프는 $numbers 배열의 각 요소를 순회하며 각 숫자를 $number 변수에 할당함
$sum += $number; 라인에서는 현재 순회 중인 $number 값을 $sum 변수에 더합니다. 이렇게 반복하면 배열에 있는 모든 숫자의 합이 $sum 변수에 누적됨
return $sum; 라인은 최종적으로 계산된 합계를 반환함
echo items(8, 50, 15, 20); 라인은 함수를 호출하고, 함수는 전달된 숫자들을 모두 더한 결과를 반환합니다. 그 결과를 echo를 통해 출력함
8 + 50 + 15 + 20의 결과인 93이 출력됨.*/



    /*for ($a = 1; $a <= 5; $a++)   

    {   for ($b = 1; $b <= $a; $b++)   
        {
            echo "*";   
        }
        echo "\n";   
    }
    for ($a = 1; $a <= 10; $a++)  */

    /*$i = "*";
    for ($a = 1; $a <= 5; $a++) {
        echo "{$i}";
        $i .= "*"; 
        echo"\n";
    }

    $i = "*";*/

    /*for ($a = 1; $a <= 5; $a++) {
        echo str_repeat(" ", 5 - $a) . $i . "\n";
        $i .= "*";
        
    }*/


    /*for ($a = 5; $a >= 1; $a--) {
        for ($b = 1; $b <= $a; $b++) {
            echo "*";
        }
        echo "\n";
    }*/
    
//   레퍼런스 파라미터

 function test1($str) {
        $str = "함수 test 1";
        return $str;


 }
function test2(&$str) {
        $str = "함수 test 2";
}

$str = "???";
$result = test1( $str );
echo $str, "\n";
echo $result;
// // function test1($str):

// test1이라는 함수를 정의합니다.
// 이 함수는 하나의 매개변수 $str을 가집니다.
// 이 매개변수는 함수 내에서 새로운 값을 할당할 수 있으며, 함수 외부에 있는 $str 변수와는 별개의 변수입니다.
// $str = "함수 test 1";:

// 함수 test1 내에서 $str 변수에 "함수 test 1" 문자열을 할당합니다.
// return $str;:

// test1 함수는 $str 변수를 반환합니다.
// function test2(&$str):

// test2라는 함수를 정의합니다.
// 이 함수는 $str이라는 참조 매개변수를 가집니다. & 기호는 이 변수가 참조로 전달됨을 나타냅니다.
// 참조 매개변수를 사용하면 함수 내에서 이 변수의 값을 변경할 수 있으며, 변경된 값은 함수 외부에도 영향을 미칩니다.
// $str = "???";:

// 함수 외부에 있는 $str 변수에 "???" 문자열을 할당합니다.
// $result = test1($str);:

// test1 함수를 호출하고, $str 변수의 값을 전달합니다.
// test1 함수는 전달된 값을 무시하고 항상 "함수 test 1" 문자열을 반환합니다. 이 반환값은 $result 변수에 저장됩니다.
// echo $str, "\n";:

// 함수 호출 이후, $str 변수의 값을 출력합니다. 이 때 출력되는 값은 함수 내에서 변경되지 않았으므로 "???"입니다.
// echo $result;:

// test1 함수의 반환값인 "함수 test 1"을 출력합니다.
// 결과적으로, 코드 실행 시 다음과 같은 출력을 생성합니다:
// test1 함수는 매개변수로 전달받은 값을 무시하고 항상 "함수 test 1"을 반환하며, test2 함수는 매개변수로 전달받은 변수를 참조로 사용하여 외부 변수의 값을 변경합니다.
// ?>
