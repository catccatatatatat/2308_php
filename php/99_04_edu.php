<?php
class Car 
{
	protected $name = "Ray";
	protected $company = "KIA";
	protected function move() {
		echo "Advance!\n";
	}
	protected function stop() {
		echo "stop!\n";
	}
	public function auto() {
		echo $this->company." ".$this->name." ";
		$this->move();
		$this->stop();
	}
}

class KIA extends Car {
	public function __construct($name){
		$this->name = $name;
		$this->company = "KIA";
	}
}class Toyota extends Car {
	public function __construct($name){
		$this->name = $name;
		$this->company = "Crown";
	}
}


$obj = new KIA("RAY");
$obj -> auto();

$obj2 = new Toyota("Toyota");
$obj2 -> auto();

//class 는 동종의 객체들이 모여있는 집합을 정의한 것, 카멜기법으로 적으면 암묵적으로 class임. 접근제어 지시자 : public, private, protected
// Construct 가 없으면 default 먼저 실행 됨.





?>