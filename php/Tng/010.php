<?php
if($_GET != null){
    $c = file("./kawi.dat");
    $ga = explode(" ", $c[0]);
    $win = $ga[1]; 
    $lose = $ga[2]; 
    $draw = $ga[3];
 
    echo "<br>학번:" . $_GET['var_number'] . " 이름:" . $_GET['var_name'] . "<br>";
 
    echo $_GET['var_name'] . "씨는 " . $_GET['var_gababo'] . "를 냈습니다.<br>";
 
    if($_GET['var_gababo'] == "가위" || $_GET['var_gababo'] == "바위" || $_GET['var_gababo'] == "보")
    {  
        $input = $_GET['var_gababo'];
        $gababo = array("가위" => 0, "바위" => 1, "보" => 2);
        $su = rand(0, 2);
 
        if ($su == 0) 
            $choice = "가위";
        if ($su == 1) 
            $choice = "바위";
        if ($su == 2) 
            $choice = "보";
 
        echo "컴퓨터는 " . $choice . "를 냈습니다.<br>";
 
        if($su == 0 && $gababo[$input] == 2)
        {
            echo "컴퓨터가 이겼습니다.<br>";
            ++$lose;
        }
        else if($su == 2 && $gababo[$input] == 0)
        {
            echo "당신이 이겼습니다.<br>";
            $win = ($c[0] + 1);
            ++$win;
        }
        else if($su < $gababo[$input])
        {
            echo "당신이 이겼습니다.<br>";
            $win = ($c[0] + 1);
            ++$win;
        }
        else if($gababo[$input] < $su)
        {
            echo "컴퓨터가 이겼습니다.<br>";
            ++$lose;
        }
        else if($gababo[$input] == $su)
        {
            echo "무승부 입니다<br>";
            $draw += 1;
        }
    }
    else
        echo "잘못된 입력입니다<br>";
 
    $hap = $win + $lose + $draw;
    echo "총 " . $hap . "번 시행중" . $win . "번 이기고, " . $lose . "번 졌으며 " . $draw . "번 비겼습니다.<br>";
 
    $stat = "$hap $win $lose $draw";
    exec("echo \"$stat\" > ./kawi.dat");
}
?>
