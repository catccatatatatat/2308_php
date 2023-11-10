<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>집가고싶다!!!!!</h1>
	<br>
	<br>
	<form action="/home" method="POST">
		@csrf
		<button type="submit">POST</button>
	</form>
		<br>
		<br>
		<form action="/home" method="POST">
		@csrf
		@method('PUT')
		<button type="submit">PUT</button>
	</form>	
	<br>
		<br>
		<form action="/home" method="POST">
		@csrf
		@method('PUT')
		<button type="submit">PUT</button>
	</form>	
	<br>
		<br>
		<form action="/home" method="POST">
		@csrf
		@method('DELETE')
		<button type="submit">DELETE</button>
	</form>	
	<!-- POST와 GET 으로 받아 올 수 있는데 put 메소드를 @method('PUT')로 받아옴 -->
<!-- POST 로 값을 받아올 때 @csrf 를 작성해서 
CSRF(Cross-Site Request Forgery) - 사이트 간 요청 위조
사용자가 자신의 의지와는 무관하게 공격자가 의도한 행위(수정, 삭제, 등록 등)를 
특정 웹사이트에 요청하게 하는 공격을 말한다. 를 방지함 -->
</body>
</html>