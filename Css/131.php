<?php
$i=1;
do
{
$j=1;
do
{
echo "*";
$j++;
}while($j<=$i);
echo "\n";
$i++;
}while($i<=7);
$height = 5; 
$i = 1;
while ($i <= $height) {
    $spaces = $height - $i;
    $j = 1;
    while ($j <= $spaces) {
echo " ";
$j++;
}
    $k = 1;
    while ($k <= $i) {
        echo "*";
        $k++;
    }

    echo "\n";

    $i++;
}
?>


