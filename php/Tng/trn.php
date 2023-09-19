<?php
$conn = null;
db_conn($conn);

try {
    $select_sql = "SELECT emp_no FROM employees WHERE salary >= 80000;";
    $select_params = [];
    $results = executeQuery($conn, $select_sql, $select_params);

 
    $high_salary_employees = [];
    foreach ($results as $row) {
        $emp_no = $row['emp_no'];
        $high_salary_employees[] = $emp_no;
    }

    
    echo "employees with a salary of 100000 or more: ";
    foreach ($high_salary_employees as $emp_no) {
        echo $emp_no . " ";
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

function db_conn(&$conn) {
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully\n";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function executeQuery($conn, $sql, $params) {
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute($params);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>