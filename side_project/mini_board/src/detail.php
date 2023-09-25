<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/");
define("FILE_title", ROOT."title.php");
require_once(ROOT."lib/lib_db.php");
try{
	$id = "";
	$conn = null;
	// id확인
	if(isset($_GET["id"])){
		$id=$_GET["id"]; //id 셋팅
	} else {
		throw new Exception("Parameter ERROR : NO id"); //강제 예외 발생
	}

	if(!my_db_conn($conn)) {
		throw new Exception("DB Error : PDO Instance");
	}

	// 게시글 데이터 조회
	$param_id = [
		"id" => $id
	];
	$result=db_select_board_id($conn, $param_id);

	// 게시글 조회 예외 처리
	if(!$result) {
		throw new Exception("DB Error : PDO Select_id");
	} else if(!(count($result) === 1)){
		throw new Exception("DB Error : PDO Select_id count," .count($resilt));
	} 
$item=$result[0];

} catch (Exception $e) {
	echo $e->getMessage(); //예외 메세지 출력
	exit; //처리종료
} finally {
	db_destroy_conn($conn);
}
	// 게시글 조회 count 에러
	
$page=$_GET["page"];	
?>



<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>상세페이지</title>
	<link rel="stylesheet" href="/mini_board/src/css/common.css">
</head>
<body>
	<?php
	require_once(ROOT."header.php");
	?>
<table>
	<tr>
		<th>글 번호</th>
		<td><?php echo $item["id"]; ?></td>
	</tr>
	<tr>
		<th>제목</th>
		<td><?php echo $item["title"]; ?></td>
	</tr>
	<tr>
		<th>내용</th>
		<td><?php echo $item["detail"]; ?></td>
	</tr>
	<tr>
		<th>작성일자</th>
		<td><?php echo $item["date_of_issue"]; ?></td>
		
	</tr>

</table>
<a href="/mini_board/src/update.php?id=<?php echo $item["id"]; ?>&page=<?php echo $page ?>">수정</a>
<a href="/mini_board/src/miniboardlist.php/?page=<?php echo $page ?>">취소</a>
<a href="/mini_board/src/delete.php?id=<?php echo $item["id"]; ?>&page=<?php echo $page; ?>" onclick="return confirm('정말로 삭제하시겠습니까?')">삭제</a>

</body>
</html>