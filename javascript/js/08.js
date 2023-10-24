// 조건문  
// if(조건) {


// } else if(조건) {

// } else {

// }
// let age = 50;
// switch(age) {
//     case 20:
//         console.log("20대");
//         // 처리
//         break;
//     case 30:
//         console.log("30대");
//         // 처리
//         break;
//     case 40:
//         console.log("40대");
//         // 처리
//         break;
//     default:
//         console.log("몰라잉.");
//         break;
// }

// ----------------------------
//반복문 (while, do_while, for, foreach, for...in, for...of)
//-----------------------------
// for each : 배열만 사용가능
// let arr = [1, 2, 3, 4];
// arr.forEach(function( val, key){
//     console.log(`${key} : ${val}`);
// });


// for...in : 모든 객체를 루프 가능, key에만 접근이 가능
// let obj = {
//     key1: 'val2'
//     ,key2: 'val2'
// }
// for( let key in obj) {
//     console.lof(key);
// }
// // for..of : 모든 객체를 루프 가능, value에만 접근이
// for( let key of obj) {
//     console.lof(key);
// }


// 정렬해주세요
let sort_arr = [3, 5, 2, 7, 10];
function bubbleSort(arr) {
    const len = arr.length;
    for (let i = 0; i < len; i++) {
        for (let j = 0; j < len - 1; j++) {
            if (arr[j] > arr[j + 1]) {

                let temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
    return arr;
}

let sortedArray = bubbleSort(sort_arr);
c
onsole.log(sortedArray);