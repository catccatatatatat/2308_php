<?php

// for문
// for(시작; 조건; 증가/증감 연산자) {
//  반복 하고 싶은 처리
// }

/*for($i = 0; $i <= 2; $i++) {
    echo "안녕하세요.\n";
}*/



// break : for문을 종료하고 빠져나오는 문법;
/*for($i = 0; $i <= 2; $i++) {
    break;
    echo "안녕하세요.\n";}*/

// continue : continue 아래에 있는 처리를 실행하지 않고 다음 루프로 진행
/*for($i = 0; $i <= 2; $i++) {
    if($i === 1){
        continue;
    }
    echo "안녕하세요.{$i}\n";
}*/

// 이중 루프 (for 반복문 속 for 반복문)
/*for($i = 0; $i <= 1; $i++) {
    for($z = 9; $z >= 8; $z--) {
            echo "{$i},,,,,{$z}\n";
    }


}*/
// 2중루프를 써서 구구단 만들기
/*for ($i = 1; $i < 10; $i++)
{
    echo "{$i}단", "\n";
    for ($z = 1; $z < 10; $z++)
    {echo "$i x $z = ", $i*$z, "\n";}
    echo "\n";
}*/

// for ($i = 1; $i < 10; $i++)
//     {   
//     if($i != 2 && $i != 8)
//     {
//         continue;
//     }
//     echo "{$i}단", "\n";
//     for ($z = 1; $z < 10; $z++)
//     {
//         echo "$i x $z = ", $i*$z, "\n";
//     }
//     echo "\n";}
    
   /* for ($i = 1; $i < 10; $i+=7)
    {   
    echo "{$i}단", "\n";
    for ($z = 1; $z < 10; $z++)
    {
        echo "$i x $z = ", $i*$z, "\n";
    }
    echo "\n";}
 for ($i = 1; $i < 10; $i++)*/
//     {   
//     if($i != 1 && $i != 9)
//     {
//         continue;
//     }
//     echo "{$i}단", "\n";
//     for ($z = 1; $z < 10; $z++)
//     {
//         echo "$i x $z = ", $i*$z, "\n";
//     }
//     echo "\n";}

for ($i = 1; $i < 10; $i++)
    {   
    if($i % 2 === 0)
   {
       continue;
  }
   echo "{$i}단", "\n";
   for ($z = 1; $z < 10; $z++)
    {
       echo "$i x $z = ", $i*$z, "\n";
    }
    echo "\n";}
?>
