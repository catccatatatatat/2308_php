la<?php
	// print_r($_SERVER);
	print_r($_GET);
	print_r($_POST);
?>
<!-- form tag 에 method는 super globar 변수  -->
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
			<form action="/99_03_edu.php" method="post"> 
				<label for="id">ID : </label>
				<input type="text" name="id" id="id">
				<br>
				<label for="PW">PW: </label>
				<input type="PASSWORD" name="PW" id="PW">
				<input type = "hidden" name = "name" value ="meerkat">
				<button type="submit">enter</button>

			</form>
</body>
</html>