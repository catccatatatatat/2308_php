
<?php
/* 가위, 바위, 보 게임 */
$item = array(
	'가위'=>33,
	'바위'=>33,
	'보'=>33,
);

$setItem = array();
foreach($item as $k=>$v){
	$setItem = array_merge($setItem,array_fill(0,$v,$k));
}
shuffle($setItem);
$getItem = $setItem[array_rand($setItem)];
echo $getItem;
?>