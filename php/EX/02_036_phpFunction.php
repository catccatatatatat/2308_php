<?function my_sum($a, $b) {
    return $a + $b;
}

function calculatePercentage($value, $total) {
    if ($total == 0) {
        $result = 0; // 분모가 0일 경우 0%를 저장합니다.
    } else {
        $result = ($value / $total) * 100;
    }

    return $result;
}

// 함수 호출하여 결과 출력
$value = 30;
$total = 150;

$sum_result = my_sum($value, $total);
$percentage_result = calculatePercentage($value, $total);

echo "두 수의 합: " . $sum_result . "\n";
echo "백분율: " . $percentage_result . "%\n";

// 가변 파라미터
function my_arag_param(...$items) {
    print_r($items);
    func_num_args()

}

?>
