<?php

require_once("../ex/04_107_fncdb_connect.php");

$conn = null;
my_db_conn($conn);

// 1.
$sql =
    " INSERT INTO employees (
		emp_no, 
		birth_date, 
		irst_name, 
		last_name, 
		gender,
		 hire_date
		 ) "
    ." VALUES (:emp_no, 
	:emp_birth_date, 
	:emp_first_name, 
	:emp_last_name, 
	:emp_gender, 
	:emp_hire_date
); ";

$arr_ps = [
    ":emp_no" => 500004,
    ":emp_birth_date" => "2000-01-14", 
    ":emp_first_name" => "minjung", 
    ":emp_last_name" => "kim",
    ":emp_gender" => "F", 
    ":emp_hire_date" => "20230918", 
];
$stmt = $conn->prepare($sql);
$result = $stmt->execute($arr_ps);

$conn->commit();

var_dump($result);

// 2.
$sql =
    " UPDATE employees "
    ." SET first_name = :first_name, last_name = :last_name "
    ." WHERE emp_no = :emp_no; "; 

$arr_ps = [
    ":first_name" => "dully",
    ":last_name" => "hoi",
    ":emp_no" => 500004, 
];
$stmt = $conn->prepare($sql);
$result = $stmt->execute($arr_ps);

$conn->commit();

var_dump($result);

// 3.
$sql = " SELECT * FROM employees WHERE emp_no = :emp_no; "; 
$arr_ps = [
    ":emp_no" => 500004,
];

$stmt = $conn->prepare($sql);
$stmt->execute($arr_ps);
$result = $stmt->fetchAll(); 
print_r($result);

// 4.
$sql = " DELETE FROM employees WHERE emp_no = :emp_no; "; 
$arr_ps = [
    ":emp_no" => 500004,
];

$stmt = $conn->prepare($sql);
$result = $stmt->execute($arr_ps);
$res_cnt = $stmt->rowCount();

var_dump($res_cnt);

$conn = null;
?>
