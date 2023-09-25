<?php
// get method



//<URL STRUCTURE>

// https://www.google.com/search?q=apple+music&oq=apple+mu&aqs=chrome.0.0i433i512j69i57j0i512l8.8243j0j15&sourceid=chrome&ie=UTF-8

// https:// : protocol

// www.google.com/ : domaim

// earch?q=apple+music&oq=apple+mu&aqs=chrome : query string, parameter

// https://blog.naver.com/cat_goes_meowo

// https://  > protocol

// bolg.naver.com > domain

// cat_goes_meowo > qyery string, parameter

// protocol  > promise, covenant, rull

// domaim > IP or settings of the server you want to connect to

// pass > Address of the location where you want to execute

// qurey string (parameter) > Data sent by the user when communicating with the get method


print_r($_GET);
$arr = $_GET;

?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="/04_146_http_get_method.php/?page=1&num=10">test</a>
</body>
</html>
