<?php




// echo "include 22222 \n";



$file = fopen("zz.text", "a");
var_dump($file);
$f_write = fwrite($file, "meow\n");

// $test ="a";
if(isset($test)) {
    echo "참";
} else {
    echo "거짓";
}


if($file) {
    echo "파일 안열림";
}

while($line = fgets($file)) {
    echo $line;
}

if( !fclose($file)) {
    echo "파일 안닫김";
}
unlink("zz.text")
?>