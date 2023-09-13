<?php
$i = 0;
while ($i <= 2) {
    echo "{$i}\n";
    $i++;
}


$num = 2;
$i = 1;

echo "2단 구구단\n";

while ($i <= 9) {
    echo "$num x $i = " . ($num * $i) . "\n";
    $i++;
}



// do ~ while : 무조건 한번은 실행하고, 그 다음부터 조건이 참이면 루프하는 문법
$i = 0;
do {
    echo "ttt";
}
while($i <  0);
?>