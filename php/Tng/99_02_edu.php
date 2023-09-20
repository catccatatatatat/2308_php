<?php


// // 함수 선언 : 함수를 만들어 두는 것 
// function my_sum($num1, $num2) {
// 	$sum= $num1 + $num2;
// 	return $sum;

// }



// // 함수 호출 : 미리 만들어둔 함수를 부르는 것 , 호출 되는 것은 함수의 앞 뒤에 있어도 상관없이 호출 됨.
// $result = my_sum(2, 5);
// echo $result;

// 3개의 숫자를 빼기 하는 함수를 만들어 주세요.
// function my_sum($a, $b, $c) {
// 	$sum = $a - $b - $c;
// 	return $sum;
// }

// $a = 9;
// $b = 4;
// $c = 1;

// $result = my_sum($a, $b, $c);
// if(!$result){
// 	echo "ERROR";
// } else{
// 	echo $result;
// }
// isset: 값이 세팅 되어 있으면 true ex) if( isset($test)) true 인지 확인 할 때 if( $test === 0 )
// function my_sub($a, $b, $c) {
// 	return $a - $b -$c;
// }
// echo my_sub(5, 4, 1);



// 가변 파라미터 parameter(한도)(매개변수)

//  function my_all_sum(...$numbers) {
// 	$sum = 0;
// 	foreach ($numbers as  $key => $val){
// 	$sum = $sum + $val;
//  }
//  return $sum;
//  }
// $sum_1 = my_all_sum(2, 4, 5);
// echo $sum_1;

// 레퍼런스 파라미터 pass by reference(reference:언급대상 한도)(변수명)
function my_ref($val, &$ref) { //parameter
		$val = "my_ref";
		$ref = "my_ref";
}
$str1 = "str1";
$str2 = "str2";

my_ref($str1, $str2); //argument: 논거(인자)(값)(인자(인수)값을 변수로 넘겨줄 때)

echo "str1 : {$str1}\n";
echo "str2 : {$str2}\n";

// print_r, var_dump 차이 : 값의 출력 차이 (실제 소스 코드에는 절대 x echo 만 ooooo 소스 코드 작성 중 확인용으로만 사용 ★)

print_r(true);
echo"\n";
var_dump(true);
?>