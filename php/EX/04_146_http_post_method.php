<?php
// POST Method
// request 할 때 데이터를 외부에서 볼 수가 없다

print_r($_POST);


?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST</title>
</head>
<body>
	<form action="/04_146_http_post_method.php" method="POST">
	<body>
    <!-- <from>태그 : 정보를 제출하기 위하여 범위를 지정하는 역할을 합니다.-->
    <fieldset>
    <label for="">ID : </label>
<input type="text" id="id" name="id">
<br>
<label for="pw">PW :</label>
<input type="text"id="PW" name="pw">
<br>
<button type="submit">전송</button>

</fieldset>
	</form>
</body>
</html>