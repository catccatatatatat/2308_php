<?php

$db_host	= "localhost"; // host
$db_user	= "root"; // user
$db_pw		= "php504"; // password
$db_name	= "employees"; // DB name
$db_charset	= "utf8mb4"; // charset
$db_dns		= "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;

$db_options	= [
	// DB의 Prepared Statement 기능을 사용하도록 설정
	PDO::ATTR_EMULATE_PREPARES		=> false
	// PDO Exception을 Throws하도록 설정
	,PDO::ATTR_ERRMODE				=> PDO::ERRMODE_EXCEPTION
	// 연상배열로 Fetch를 하도록 설정
	,PDO::ATTR_DEFAULT_FETCH_MODE	=> PDO::FETCH_ASSOC 
];

// // PDO Class로 DB 연동
$obj_conn = new PDO($db_dns, $db_user, $db_pw, $db_options);

// SQL 작성
/*$sql = " SELECT "
	." 		* "
	." FROM "
	." 		EMPLOYEES "
	." WHERE "
	." 		emp_no = :emp_no "
	;

// Prepared Statement 셋팅
$arr_ps = [
	":emp_no" => 10004
];

// Prepared Statement 생성
$stmt = $obj_conn->prepare($sql); 
$stmt->execute($arr_ps); // 쿼리 실행
$result = $stmt->fetchAll(); // 쿼리 결과를 fetch
print_r($result);*/

// $sql = " SELECT "
// 	." 		emp. emp_no, emp.birth_date, sal.salary "
// 	." FROM "
// 	." 		EMPLOYEES emp "
// 	." JOIN "
// 	." salaries sal "
// 	." ON "
// 	." emp. emp_no = sal.emp_no "
// 	." AND "
// 	." sal.to_date >= NOW() "
// 	." WHERE "
// 	." emp.emp_no IN (:emp_no_1, :emp_no_2) "
// 	;
// 	$arr_ps = [
// 		":emp_no_1" => 10001
// 		, ":emp_no_2" => 10002
		
// 	];
// 	$stmt = $obj_conn->prepare($sql); 
// $stmt->execute($arr_ps); 
// $result = $stmt->fetchAll(); 
// print_r($result);


// --------------
// insert 
// 부서 번호가 'd010', 부서명이 'php504'인  데이터를 insert 해주세요.

// $sql = "INSERT INTO"
// ." departments ("
// 	." dept_no "
// 	." , dept_name "
// 	."  ) "
// 	." VALUES( "
// 	." :dept_no "
// 	." ,:dept_name "
// 	." ) ";
// $arr_ps = [
// 	":dept_no" => "d010"
// 	,":dept_name" => "php504"
// ];
// $stmt = $obj_conn->prepare($sql);
// $result = $stmt->execute($arr_ps);
// $obj_conn->commit(); //커밋

// var_dump($result);

// $obj_conn = null;

// delete
// 부서 번호가 'd010' 삭제
// DELETE FROM departments
// WHERE dept_no='d010';
$sql = " DELETE "
." FROM "
." departsments "
." WHERE "
." dept_no1=:dept_no1";
$arr_ps = [
		":dept_no" => "d010"
	];
	$stmt = $obj_conn->prepare($sql);
$result = $stmt->execute($arr_ps);
$res_cnt = $stmt->rowCount();
if($res_cnt >=2){
	$obj_conn->rollBack();
	echo "rollback";
}else{$obj_conn->commit();
	echo "commit";}
// 두개 이상일 경우 롤백, 아닐경우, 커밋.

$obj_conn->commit(); //커밋
if ( !$result) {
$obj_conn->rollback(); //롤백
} else{
	$obj_conn->commit(); //커밋
};
var_dump($result);
$obj_conn = null;
//DB 파기
?> 

