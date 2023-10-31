/*
1. promise 객체
	- 비동기 프로그래밍의 근간이 되는 기법 중 하나
	- 프로미스를 사용하면 콜백 함수를 대체하고, 비동기 작업의 흐름을 쉽게 제어가능
	- Promise 객체는 비동기 작업의 최종 완료 또는 실패를 나타내는 독자적인 객체
*/

// 2. promise 사용법
const PROMISE1 = new Promise( function(resolve, reject) {
	let flg = true;
	if(flg) {
		return resolve('성공'); // 요청 성공 시 resolve()를 호출
	} else {
		return reject('실패'); // 요청 실패 시 reject()를 호출
	}
});

PROMISE1
.then( data => console.log(data) )
.catch( err => console.log(err))
.finally(() => console.log('finally 입니다.'));


// 3. promise 함수 등록
// 재사용성, 가독성, 확장성을 이유로 현업에서는 아래와 같이 함수를 등록하고 사용
function PRO2() {
	return new Promise( function(resolve, reject) {
		let flg = true;
		if(flg) {
			return resolve('성공'); // 요청 성공 시 resolve()를 호출
		} else {
			return reject('실패'); // 요청 실패 시 reject()를 호출
		}
	});
}

function PRO3(str, ms) {
	return new Promise( function(resolve) {
		setTimeout(()=>{
			console.log(str);
			resolve();
		}, ms);
	});
}

setTimeout(() => {
	console.log('A');
	setTimeout( () => {
		console.log('B');
		setTimeout(() => {
			console.log('C')
		}, 1000);
	}, 2000);
}, 3000);

PRO3('A', 3000)
.then( () => PRO3('B', 2000) )
.then( () => PRO3('C', 1000) );



//promise는 기본적으로 Callback이 하는일과 같다. 차이점은 promise는 작업이 끝난 후 실행할 함수를 제공하는 것이 아니라 promise자체 메소드인 .then()을 호출한다.

function add10(a) {
	return new Promise(resolve => setTimeout(() => resolve(a + 10), 100));
  } //Promise사용 시 작업이 끝났음을 알려주는 resolve를 인자로 받아들임.
add10(10)
	.then(add10)
	.then(add10)
	.then(add10)
	.then((res) => console.log(res))

//Promise는 .then()과 같은 메소드를 연속적으로 사용이 가능한 이점을 가지고 있다. 따라서 callback을 사용했을 때와는 다르게 코드를 작성하고 이해하기가 한결 쉬워졌다.


// Promise에서의 예외 처리

add10(10)
.then((res) => {
        throw 'test error';
    })
.catch((err) => console.log(err));
/*promise에서는 작업이 실패했을
경우 자동으로 .catch()메소드를 호출되게 한다.
기존 try-catch를 이용해서도 예외처리가 가능하지만 자바스크립트에서는 promise의 catch를 사용하라는 warning message를 출력함.*/


//Async/Await

//Node.js 7.6버전부터 구현된 기능이며 Async/Await를 사용하면 promise에 비해 보다 쉽게 비동기적인 상황을 표현할 수 있다.

async function f1() {
	const a = await add10(10);
	const b = await add10(a);
	console.log(a, b)
}
f1();

//Async와 Await을 사용하려면 우선 사용할 함수 앞에 async라는 키워드를 붙여 사용해야 하며 선언된 async 함수 안에서만 await 키워드를 사용할 수 있다.

//await은 함수의 작업이 끝나고 결과값을 반환할 때까지 대기하게 되며 결과 값이 리턴된다면 다음 작업으로 넘어가게 됩니다.

// Async/Await의 예외 처리

async function f2() {
	const a = await add10(10).then(res => res);
	const b = await add10(a).catch(err => err);
	console.log(a, b)
}
f2();
//위의 코드에선 add10()이 promise를 리턴하니까 promise가 지원하는 메소드를 사용이 가능하다. 그래서.catch()를 이용하여 예외처리를 할 수 있다.

	async function f3() {
		try {
		const a = await add10(10)
		const b = await add10(a)
		console.log(a, b)
		} catch(err) {
		console.log(err)
		}
	}
	f3();

// 이렇게 기존방식인 try-catch도 사용이 가능하다.