<?php
/*$number=rand(0,100);
	$i=0;
	$number=6;
	echo "*****숫자 맞추기 게임*****\n";
	echo "1~100사이의 숫자를 입력해주세요 총 {$number}번의 기회가 있습니다."."\n";
	while(true){
		echo "input : ";
		$user =(int)trim(fgets(STDIN));
		$i++;
		$z=$number-$i;
		if ($user > 100 || $user < 0){
			echo "입력한 숫자가 0~100이 아닙니다. 남은횟수 : {$z}"."\n";
		}
		else if($user > $number){
			echo "더 작음 남은횟수 : {$z}"."\n";
		}
		else if ($user < $number){
			echo "더 큼 남은횟수 : {$z}"."\n";
		}
		else{
			echo "정답!";
			break;
		}
		if($i===$number){
			echo "실패! 정답은 {$number} 입니다.";
			break;
		}
	}*/
    // 1~10 반복문 출력
   /*for ($i = 1; $i <= 10; $i++) {
        echo $i , "\n";
    }*/
// 구구단 8단

        /*while($i <= 9){
        	$z=8*$i;
        	echo "8 X {$i} = {$z}\n";
    
        	$i++;
        }*/ 
// 구구단19단


        /*while($i <= 9){
        	$z=19*$i;
        	echo "19 X {$i} = {$z}\n";
    
        	$i++;
        }*/
		
		$food = "";
	if( $food === "짜장면" ) {
		echo "중식";
	}
	else if( $food=== "비빔밥" ) {
		echo "한식";
	}
	else{
		
			echo "양식";
		}
		?>
