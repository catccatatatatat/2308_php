//  두 수를 받아서 더한 값을 리턴해주는 함수를 만들어 봅시다.
// function mySum(a, b) {
//     return a + b;
// }

// mySum(2,5);

// // 콜백함수 : 

// function test() {
//     console.log('A');
//     mySum(2,5);
// }

// setTimeout(function(){
//     console.log('A');
// }, 1000);


// [1,2,3],filter( function(num){
//     return num === 3;
// });


// function myPrint() {
//     console.log('123');
// }

// 함수를 3개 만들어 주세요.
// -php를 출력하는 함수
// -504를 출력하는 함수
// 풀스택을 출력하는 함수

// function one() {
//     console.log('php')
// }
// function two() {
//     console.log('504')
// }
// function three() {
//     console.log('풀스택')
// }


// setTimeout(one, 3000);
// setTimeout(one, 5000);
// three();
// 
// 버튼을 하나 만듭시다.
// 버튼을 클릭하면 네이버 페이지로 이동시켜 주세요
function popOpen() {
	winOpen = open('http:\/\/www.naver.com', '', 'width=500 height=500');
}

const BTNDAUM = document.getElementById('btn_naver');
let winOpen;
BTNDAUM.addEventListener('click', popOpen);