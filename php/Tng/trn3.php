<?php

    function db_conn( &$conn ) {
        $db_host = "localhost";
        $db_user = "root";
        $db_pw = "php504";
        $db_name = "employees";
        $db_charset = "utf8mb4";
        $db_dns = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
        
        $db_options = [
            PDO::ATTR_EMULATE_PREPARES => false
            ,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $conn = new PDO($db_dns, $db_user, $db_pw, $db_options);
    }

    // 1. titles 테이블에 데이터가 없는 사원을 검색

    // SELECT emp.emp_no
    // FROM employees AS emp
    // LEFT OUTER JOIN titles AS tit
    // ON emp.emp_no = tit.emp_no
    // WHERE tit.emp_no IS NULL;

    // SELECT emp.emp_no
    // FROM employees AS emp
    // WHERE NOT EXISTS (SELECT tit.emp_no FROM titles AS tit WHERE emp.emp_no = tit.emp_no);

    $conn = null;
   try {
        db_conn($conn);
        $sql = 
            " SELECT "
            ."       emp.emp_no "
            ." FROM "
            ."       employees AS emp "
            ." WHERE "
            ."       NOT EXISTS "
            ."           ( "
            ."           SELECT "
            ."               tit.emp_no "
            ."           FROM "
            ."               titles AS tit "
            ."           WHERE "
            ."               emp.emp_no = tit.emp_no "
            ."           ) "
        ;
    
        $stmt = $conn->prepare($sql);
        $stmt->execute(); 
        $result = $stmt->fetchAll();
        print_r($result);



        $sql = 
        " INSERT INTO"
        ."       titles "
        ." VALUES "
        ."       ( "
        ."       :emp_no "
        ."      ,:title "
        ."      ,NOW() "
        ."      ,:to_date "
        ."      ) "
        ;
        
        $stmt = $conn->prepare($sql);
        foreach ($result as $key=>$item) {
            $arr_ps = [
                ":emp_no" => $item['emp_no']
                ,":title" => "green"
                ,":to_date" => 99990101
            ];
            $result = $stmt->execute($arr_ps);
        }
        $conn->commit();
        echo "커밋성공";
   }
   catch(Exception $e){
      echo "예외 발생 : {$e->getMessage()}";
   }
   finally {
      $conn=NULL;
   }
?>