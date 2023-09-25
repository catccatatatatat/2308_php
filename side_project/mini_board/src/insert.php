<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/");
define("FILE_HEADER", ROOT."header.php");
require_once(ROOT."lib/lib_db.php");





// POST로 request가 왔을 때 처리 
$http_method = $_SERVER["REQUEST_METHOD"];
if($http_method === "POST"){
    try {
        $arr_post = $_POST;    
        $conn = null; // DB Connection 변수
        
        // DB 접속
        if(!my_db_conn($conn)){
            // DB Instance Error
            throw new Exception("DB Error : PDO Instance");
        }
        // $conn->beginTransaction(); // 트랜잭션 시작

        // insert
        if(!db_insert_board($conn, $arr_post)) {
            // DB Insert 에러
            throw new Exception("DB Error : Insert board");
        }

        $conn->commit(); // 모든 처리 완료시 커밋

        // 리스트 페이지로 이동
        header("Location: miniboardlist.php");
        exit;
    } catch(Exception $e) {
        $conn->rollBack();
        echo $e->getMessage(); // Exception 메세지 출력
        exit;
    } finally {
        db_destroy_conn($conn); // DB 파기
    }

}

// delete.php 페이지에서 삭제 확인과 관련된 코드
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $page = isset($_GET["page"]) ? $_GET["page"] : 1; // 페이지 정보 가져오기

    // "삭제 확인" 메시지를 띄우고 사용자가 확인하면 삭제 처리 페이지로 이동
    echo '<script>
            var confirmDelete = confirm("정말로 삭제하시겠습니까?");
            if (confirmDelete) {
                window.location.href = "/mini_board/src/delete_process.php?id=' . $id . '&page=' . $page . '";
            } else {
                window.location.href = "/mini_board/src/detail.php?id=' . $id . '&page=' . $page . '";
            }
          </script>';
}
?>

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" detail="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mini_board/src/css/common.css">
    <title>작성페이지</title>
</head>
<body>
    <?php
        require_once(FILE_HEADER);
    ?>
    <form action="/mini_board/src/insert.php" method="post">
        <main>
            <fieldset>
            <label for="title">제목</label>
            <input type="text" name="title" id="title">
            <br>
            <label for="detail">내용</label>
            <textarea name="detail" id="detail" cols="30" rows="10"></textarea>
            <br>
            <button type="Date_of_issue">작성</button>
            <a href="/mini_board/src/miniboardlist.php">취소</a>      
            </fieldset>
        </main>
    </form> 
    
</body>
</html>