<?php


        while($i <= 9){
        	$z=19*$i;
        	echo "19 X {$i} = {$z}\n";
    
        	$i++;
        }
		?>

		<?php
		if (isset($_POST['input'])){
			$num = (int)($_POST['input']);
			for($j=1;$j<=19;$j++){
				echo $num." X ".$j." = ".($num*$j);
			}
			echo "<br/>";
		}		 
		?>
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


<?php

for($dan = 1; $dan <= 19; $dan++) {
	echo $dan . "단" . "\n";
	fputs($file, $dan . "단" . "\n");
	for($i = 1; $i <=19; $i++) {
		$res = $dan * $i;
		//echo $dan. " X " . $i. " = " . $res . "\n";
		fputs($file, $dan. " X " . $i. " = " . $res . "\n" );
	}

}