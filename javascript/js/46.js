/*
1. HTTP ( Hypertext Transfer Protocol) 란?
	어떻게 Hypertext를 주고 받을지 규약한 프로토콜로
	클라이언트가 서버에 데이터를 request(요청)을 하고,
	서버가 해당 request에 따라 response(응답)을 클라이언트에 보내주는 방식입니다.
	Hypertext는 웹사이트에서 이용되는 하이퍼 링크나 리소스, 문서, 이미지 등을 모두 포함합니다.

2. AJAX ( Asynchronous JavaScript And XML) 이란?
	웹페이지에서 비동기 방식으로 서버에게 데이터를 request하고,
	서버의 response를 받아 동적으로 웹페이지를 갱신하는 프로그래밍 방식입니다.
	즉, 웹 페이지 전체를 다시 로딩하지 않고도 일부분만을 갱신 할 수 있습니다.
	대표적으로 XMLHttpRequest 방식과 Fetch Api 방식이 있습니다.

3. JSON ( JavaScript Object Notation ) 이란?
	JavaSctipt의 Object에 큰 영감을 받아 만들어진 서버 간의 HTTP 통신을 위한 텍스트 데이터 포맷입니다.
	장점은 다음과 같습니다.
		- 데이터를 주고 받을 때 쓸 수 있는 가장 간단한 파일 포맷
		- 가벼운 텍스트를 기반
		- 가독성이 좋음
		- Key와 Value가 짝을 이루고 있음
		- 데이터를 서버와 주고 받을 때 직렬화(Serialization)[*1 참조]하기 위해 사용
		- 프로그래밍 언어나 플랫폼에 상관없이 사용 가능

	JSON.stringify( obj ) : Object를 JSON 포맷의 String으로 변환(Serializing)해주는 메소드
	JSON.parse( json ) : JSON 포맷의 String을 Object로 변환(Deserializing)해주는 메소드

// XML
<xml>
	<data>
		<id>56</id>
		<name>홍길동</name>
	</data>
</xml>

// json
{
	data: {
		id: 56
		,name: '홍길동'
	}
}

*/

// 동기 처리
function func1() {
    console.log('첫번째 펑션!');
    func2();
}

function func2(){
    console.log('두번째 펑션!');
    func3();
}

function func3() {
    console.log('세번째 펑션');
}

func1();
// 출력값은 아래와 같다.
// 첫번째 펑션!
// 두번째 펑션!
// 세번째 펑션! 을 띄우게 된다.

/*동기는 요청을 보낸 후 응답(결과물)을 받아야지만 다음 동작이 이루어지는 방식을 말한다.
모든 일은 순차적으로 실행되며 어떤 작업이 수행중이라면 다음 작업은 대기하게 된다*/

// 비동기 처리

function func1(){
    console.log('func1');
    func2();
}

function func2(){
    setTimeout(function(){
        console.log('func2');
    }, 0);
    func3();
}

function func3(){
    console.log('func3');
}
func1();
/*
실행결과
func1
func3
func2
*/

/*비동기 처리는 왜 필요한가? - 데이터를 서버로부터 받아오는 앱을 만든다고 가정하면,
서버로부터 데이터를 받아와서 해당 데이터를 뿌려줘야 하므로 맨 처음에 서버로부터 데이터를 받아오는 코드가 실행되어야 할 것이다.


비동기로 처리하지 않고 동기적으로 구성을 하게 된다면 데이터를 받아오기까지 기다린 다음에 앱이 실행될 것이고 서버에 가져오는 데이터 양이 늘어날수록 앱의 실행속도는 기하급수적으로 느려진다.


데이터를 가져오기까지 앱이 대기하는 상태가 발생하게 된다. 이런 불편을 없애기 위해서
데이터를 수신하는 코드와 페이지를 표시하는 것과는 비동기적으로 처리를 해야한다.
그래서 비동기처리로 가장 많이 드는 예가바로 setTimeout과 AJAX가 있다.*/