// Date
// let now = new Date();

// // getFullYear() : 년도만 가져오는 메소드
// console.log(now.getFullYear());


// // getMonth() : 월만 가져오는 메소드( +1을 해줘야 현지의 월과 같아집니다.)
// console.log(now.getMonth() + 1);

// //  getdate() : 일만 가져오는 메소드
// console.log(now.getDate());

// //  getdate() : 요일을 가져오는 메소드 ( 0 일요일 ~ 6토요일 )
// console.log(now.getDay());
// //  gethours() : 시간중 시를 가져오는 메소드
// console.log(now.getHours());
// //  getseconds() : 시간중 초를 가져오는 메소드
// console.log(now.getSeconds());
// //  getminutes() : 시간중 분을 가져오는 메소드
// console.log(now.getMinutes());
// //  getFullYears() : 년도를 가져오는 메소드
// console.log(now.getFullYear());

// // let day = now.getDay();
// let kDat = '';
// switch (day) {
//     case 1:
//         kDay = '월요일;'
// }

const now = new Date(); // 현재 날짜와 시간
const sDate = new Date('2023-09-30 19:20:10'); // 비교할 날짜와 시간
const timeDiff = now - sDate;
const daysDiff = timeDiff / (1000 * 60 * 60 * 24);
console.log(Math.floor(daysDiff));

now2 = new Date(year, month, date, 0, 0, 0, 0); //오늘 날짜 0시 0분 0밀리초 가져오는 방법
