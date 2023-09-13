<?php
// class 는 동종의 객체들이 모여있는 집합을 정의한 것

class ClassRoom 
{
    // member fild
    // 
    // 접근 제어 지시자 : public, private
    // 멤버 변수
    public $computer;  //어디든지 접근 가능
    private $book; //class 내에서만 접근 가능
    protected $bag; // class와 나를 상속 받은 자식 class내에서만 접근 가능

    // 메소드(method) : class내에 있는 함수
    public function class_room_set_value() {
        $this->computer = "컴퓨터";
        $this->book = "책";
        $this->bag = "가방";

    }
    public function print_value() {
      $str = $this->computer."\n"
         .$this->book."\n"
        .$this->bag;
        echo $str;
    }
}




//  class instance 생성
$obj_ClassRoom = new ClassRoom();
$obj_ClassRoom->computer = "test";
var_dump($obj_ClassRoom->computer);
$obj_ClassRoom->class_room_set_value();


$obj_ClassRoom->print_value();
?>



