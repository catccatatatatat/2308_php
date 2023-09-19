<?php
// 1. db_conn 이라는 함수를 만들어 주세요
// 		1-1.기능 : db설정 및 pdo객체 생성
// 2. 사원별 현재 급여를 조회하기
// 3. 조회한 데이터를 루프하면서 1,000,000 이상이면 사원 번호를 출력해주세요.
// 1번

function db_conn( &$conn ) {
	$db_host	= "localhost"; // host//del v002
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
$conn = new PDO($db_dns, $db_user, $db_pw, $db_options);
}

$conn = null;
db_conn($conn);
$sql= " select "
	." sal.salary "
	." ,sal.emp_no "
	." from "
	." salaries sal "
	." where "
	." to_date  >= now() "
	." and "
	." salary >= :sal "
	;
	$arr_ps = [
		":sal" => 80000
	];
	$stmt = $conn->prepare($sql);
	$stmt->execute($arr_ps);
	$result = $stmt->fetchAll();


	$cnt = 0;
	foreach($result as $key => $item){
		if($item["salary"]>= 1000000){
			echo $item["emp_no"],"\n";
			$cnt++;
		}
	}
echo $cnt;




// try {
//     $select_sql = "SELECT emp_no FROM employees WHERE salary >= 80000;";
//     $select_params = [];
//     $results = executeQuery($conn, $select_sql, $select_params);

//     $high_salary_employees = [];
//     foreach ($results as $row) {
//         $emp_no = $row['emp_no'];
//         $high_salary_employees[] = $emp_no;
//     }



    
//     echo "employees with a salary of 100000 or more: ";
//     foreach ($high_salary_employees as $emp_no) {
//         echo $emp_no . " ";
//     }
    
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }

// $conn = null;

// function db_conn(&$conn) {
//     $servername = "localhost";
//     $username = "your_username";
//     $password = "your_password";
//     $dbname = "your_database";

//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         echo "Connected successfully\n";
//     } catch (PDOException $e) {
//         echo "Connection failed: " . $e->getMessage();
//     }
// }

// function executeQuery($conn, $sql, $params) {
//     $stmt = $conn->prepare($sql);
//     $result = $stmt->execute($params);

//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }
?>