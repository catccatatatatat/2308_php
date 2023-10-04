<?php
//설정 정보
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/"); // 웹서버 root 패스 생성
define("FILE_HEADER", ROOT."header.php"); // 헤더 패스
require_once(ROOT."lib/lib_db.php"); // DB관련 라이브러리

try {
	// 2. DB Connect
	// 2-1. connection 함수 호출
	$conn = null; //PDO 객체 변수
	if(!my_db_conn($conn)) {
	// 2-2. 예외 처리
		throw new Exception("DB Error : PDO Instance");
	}
	$http_method = $_SERVER["REQUEST_METHOD"];
	if($http_method === "GET") {
	//3-1. GET 일 경우 (상세 페이지의 삭제 버튼 클릭)
	//3-1-1. 파라미터에서 id 획득
		$id = isset($_GET["id"]) ? $_GET["id"] : "";
		$page = isset($_GET["page"]) ? $_GET["page"] : "";
		$arr_err_msg = [];
		if($id === "") {
			$arr_err_msg[] = "Parameter Error : id";
		}	if($page === "") {
			$arr_err_msg[] = "Parameter Error : page";
		}
		if(count($arr_err_msg) >=1) {
				throw new Exception(implode("<br>", $arr_err_msg));
		}
	//3-1-2. 게시글 정보 획득
		$param_id = [
			"id" => $id
		];
		$result = db_select_board_id($conn, $param_id);
	
	//3-1-3/ 예외 처리	
		if($result === false) {
			throw new Exception("DB Error : Select id");
		} elseif(!(count($result) === 1)) {
			throw new Exception("DB Error : Select id Count");
		}
		$item = $result[0];
	} else {
		//3-2. POST일 경우 (삭제 페이지의 동의 버튼 클릭)
		//3-2-1. 파라미터에서 id 획득
		$id = isset($_POST["id"]) ? $_POST["id"] : "";
		$arr_err_msg = [];
		if($id === "") {
			$arr_err_msg[] = "Parameter Error : id";
		}

		if(count($arr_err_msg) >=1) {
				throw new Exception(implode("<br>", $arr_err_msg));
		}

		//3-2-2. Transaction시작
		$conn->beginTransaction();

		//3-2-3. 예외처리
		$param_id = [
			"id" => $id
		];

		if(!db_delete_board_id($conn, $param_id)) {
		//3-2-4.
			throw new Exception("DB Error : Delete Board id");
		}

		$conn->commit();
		header("Location: miniboardlist.php");
		exit;
	}
} catch(Exception $e) { 
	if($http_method === "POST") {
		$conn->rollBack();
	}
		echo $e->getMessage(); //에러 메세지 출력
		exit; //처리종료
} finally {
	db_destroy_conn($conn);
}




?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/mini_board/src/css/common.css">
	<title>삭제 페이지</title>
</head>
<body>
	<?php
	require_once(FILE_HEADER);
	?>
	<main>
		<table>
		<caption>
			<tr>
				<th>게시글 번호</th>
				<td><?php echo $item["id"] ?></td>
			</tr>
			<tr>
				<th>작성일</th>
				<td><?php echo $item["date_of_issue"] ?></td>
			</tr>
			<tr>
				<th>제목</th>
				<td><?php echo $item["title"] ?></td>
			</tr>
			<tr>
				<th>내용</th>
				<td><?php echo $item["detail"] ?></td>
			</tr>
		</table>
		</caption>
	</main>
	<section>
		<form action="/mini_board/src/delete.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
		<button type="submit">동의</button>
		<a href="/mini_board/src/detail.php/?id=<?php echo $id; ?>&page=<?php echo $page ?>">취소</a>
</body>
</html>