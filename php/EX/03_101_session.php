<?php
//  session : 데이터를 웹 서버에 저장
// *** 주의사항 ***
// 개인정보, 민감한 정보들은 되도록 저장하지 말아야 한다.
// session 시작
session_start();
$_SESSION["black"] = "PHP";
$_SESSION["cat"] = "JAVA";
// 모든 세션 삭제
session_unset();
session_destroy();
print_r($_SESSION);


?>
