<?php

require_once("../ex/04_107_fncdb_connect.php");


$conn = null;
my_db_conn($conn);

try {
    // 1. 
    $insert_sql = "INSERT INTO
	 employees (
		emp_no, 
		birth_date, 
		first_name, 
		last_name,
		 gender,
		  hire_date) 
        VALUES (
			:emp_no, 
			:emp_birth_date, 
			:emp_first_name, 
			:emp_last_name, 
			emp_gender, 
			:emp_hire_date);";

    $insert_params = [
        ":emp_no" => 500006,
        ":emp_birth_date" => "2000-01-14",
        ":emp_first_name" => "minjung",
        ":emp_last_name" => "kim",
        ":emp_gender" => "f",
        ":emp_hire_date" => "20230918"
    ];

    executeQuery($conn, $insert_sql, $insert_params);

    // 2. 
    $update_sql = "UPDATE employees 
                   SET first_name = :first_name, last_name = :last_name 
                   WHERE emp_no = :emp_no;";

    $update_params = [
        ":first_name" => "dully",
        ":last_name" => "hoi",
        ":emp_no" => 500006
    ];

    executeQuery($conn, $update_sql, $update_params);

    // 3. 
    $select_sql = "SELECT * FROM employees WHERE emp_no = :emp_no;";
    $select_params = [":emp_no" => 500006];
    $result = executeQuery($conn, $select_sql, $select_params);

    print_r($result);

    // 4. 
    $delete_sql = "DELETE FROM employees WHERE emp_no = :emp_no;";
    $delete_params = [":emp_no" => 500006];
    $deleted_rows = executeQuery($conn, $delete_sql, $delete_params, true);

    echo "Deleted rows: " . $deleted_rows;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
function executeQuery($conn, $sql, $params, $returnRowCount = false) {
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute($params);

    if ($returnRowCount) {
        return $stmt->rowCount();
    } else {
        return $stmt->fetchAll();
    }
}
?>