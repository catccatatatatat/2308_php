// 타이머 함수

// 1. setTimeout() : 일정 시간이 흐른 후에 콜백 함수를 실행

// setTimeout(() => console.log('시간'), 3000);

// 콘솔에 1초 뒤에 'A', 2초뒤에 'B', 3초 뒤에 'C'가 출력되도록 프로그램을 만들어주세요

setTimeout(() => console.log('A'), 1000) + setTimeout(() => console.log('B'), 2000) + setTimeout(() => console.log('C'), 3000);


// 2. clearTimeout(해당 setTimeout객체) : 타이머를 삭제
let mySet = setTimeout(() => console.log('C'), 1000);
clearTimeout(mySet);

// 3. setInterval( 콜백하수, 시간(ms) ) : 일정 시간마다 반복
let myInter = setInterval(() => console.log('미꾸라지보다 큰 미꾸라지는 미꾸엑스라지'), 1000);


// 4. clearInterval(해당  setInterval) : 인터벌 삭제
clearInterval(myInter);

// 화면을 로드하고 5초 뒤에 '두두둥장' 이라는 매우 큰 글씨가 나타나게 해주세요
    let div = document.querySelector('div')
    let test = setTimeout(() => {
        div.style.fontSize = '400px'
        div.style.color ='pink'
        div.style.fontWeight = '900'
        div.innerHTML='냐냐냐옹'
    }, 5000);