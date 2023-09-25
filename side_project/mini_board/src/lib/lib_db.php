<?php

// 현업 소스코드 관리

// *******************************
// 파일명   : 04_107_fnc_db_connect.php
// 기능     : DB 연동 관련 함수
// 버전     : v001 new Choi.JH 230918
//             v002 dbconn 설정 변경 Choi.JH 230918
// *******************************

// -------------------------------
// 함수명   : my_db_conn
// 기능     : DB Connect
// 파라미터 : PDO    &$conn
//           Array  &$arr_param
// 리턴     : boolen
// -------------------------------


function my_db_conn( &$conn ) {
    $db_host    = "localhost"; // host
    $db_user    = "root"; // user
    $db_pw      = "php504"; // password
    $db_name = "mini_board"; // DB name
    $db_charset = "utf8mb4"; // charset
    $db_dns     = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;

try {
    $db_options = [
        // DB의 prepared Statement 기능을 사용하도록 설정
        PDO::ATTR_EMULATE_PREPARES      => false
        // PDO Exception을 Throws하도록 설정
        ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
        // 연상배열로 Fetch를 하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
    ];

    // PDO Class로 DB 연동
    $conn = new PDO($db_dns, $db_user, $db_pw, $db_options);
    return true;
    }catch (Exception $e){
        echo $e->getMessage(); // Exception 메세지 출력
        $conn = null;
        return false;
    }
}


// -------------------------------
// 함수명   : db_destroy_conn
// 기능     : DB Destroy
// 파라미터 : PDO  &$conn
// 리턴     : 없음
// -------------------------------

// DB 파기
function db_destroy_conn(&$conn){
    $conn = null;
}


// -------------------------------
// 함수명   : db_select_board_paging
// 기능     : board paging 조회
// 파라미터 : PDO  &$conn
// 리턴     : Array /false
// -------------------------------
function db_select_board_paging(&$conn, &$arr_param){
    try {
        $sql =
        " SELECT "
        ." id "
        ." ,title "
        ." ,Date_of_issue "
        ." FROM "
        ." board "
        ." ORDER BY "
        ." id DESC "
        ." LIMIT :list_cnt OFFSET :offset "
        ;

        $arr_ps = [
            ":list_cnt" => $arr_param["list_cnt"]
            ,":offset" => $arr_param["offset"]
        ];

        $stmt = $conn->prepare($sql);
        $stmt->execute($arr_ps);
        $result = $stmt->fetchALL();
        return $result; //정상
    } catch(Exception $e){
        echo $e->getMessage(); // Exception 메세지 출력
        return false; //예외발생
    }
}


function db_select_board_cnt( &$conn ){
        $sql =
        " SELECT "
        ." count(id) as cnt "
        ." FROM "
        ." board "
        ;
    try {
        $stmt = $conn->query($sql);
        $result = $stmt->fetchALL();
        return (int)$result[0]["cnt"]; //정상 : 쿼리 결과 리턴
    } catch(Exception $e){
        echo $e->getMessage(); // Exception 메세지 출력
        return false; //예외발생 : false리턴
    }


}




// -------------------------------
// 함수명   : db_destroy_conn
// 기능     : DB Destroy
// 파라미터 : PDO       &$conn
//           Array      &arr_param 쿼리 작성용 배열
// 리턴     : bool / false
// -------------------------------
function db_insert_board(&$conn, &$arr_param){
    $sql =
        " INSERT INTO board( "
        ." title "
        ." ,detail "
        ." ) "
        ." VALUES ( "
        ." :title "
        ." ,:detail "
        ." ) "
        ;
    $arr_ps = [
        ":title" => $arr_param["title"]
        ,":detail" => $arr_param["detail"]
    ];

    try{
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($arr_ps);
        return $result; // 정상 : 쿼리 결과 리턴
    } catch(Exception $e) {
        echo $e->getMessage(); // Exception 메세지 출력
        return false; // 예외발생 : flase 리턴
    }


}
function db_select_board_id( &$conn, &$param_id) {
    $sql =
    " SELECT "
    ." id "
    ." ,title "
    ." ,detail "
    ." ,date_of_issue"
    ." FROM "
    ." board "
    ." WHERE "
    ." id = :id ";
    $arr_ps = [
    ":id" => $param_id["id"]];
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute($arr_ps);
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage(); //예외 메세지 출력
exit; //처리종료
} finally{

}


}
// -------------------------
// 함수명   :db_update_boards_id
// 기능     :boards 레코드 수정
// 파라미터 :PDO        &$conn
//          Array &$arr_param 쿼리 작성용 배열
// 리턴     :boolean
// -------------------------
function db_update_board_id(&$conn, &$arr_param){
    $sql = 
        " UPDATE "
        ." board "
        ." SET "
        ." title = :title "
        ." , detail = :detail "
        ." WHERE "
        ." id = :id ";
    $arr_ps = [
        ":title" => $arr_param["title"]
        ,":detail" => $arr_param["detail"]
        ,":id" => $arr_param["id"]
    ];
    try{
        $stmt = $conn ->prepare($sql);
        $result = $stmt ->execute($arr_ps);
        return $result;
    } catch(Exception $e) {
        echo $e->getmessage();
        return false;
    }
    }  

?>