// 원본은 유지하면서 오름차순 정렬 해주세요
const ARR = [6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40];

let array_test = Array.from(ARR)
array_test.sort((a,b)=>a-b);

// 짝수와 홀수를 분리해서 각각 새로운 배열을 만들어 주세요
const ARR1 = [5, 7, 3, 4, 5, 1, 2];

function splitEvenOdd(arr) {
    let evenArray = [];
    let oddArray = [];

    for (let num of arr) {
        if (num % 2 === 0) {
        evenArray.push(num);
        } else {
        oddArray.push(num);
        }
    }

    return [evenArray, oddArray];
    }

const [evenNumbers, oddNumbers] = splitEvenOdd(ARR1);

console.log("짝수 배열:", evenNumbers);
console.log("홀수 배열:", oddNumbers);


// 다음 문자열에서 구분문자를 '.'에서 ' '(공백) 으로 변경해 주세요. (구글 검색 활용 추천)

const STR1 = 'php504.meer.kat';
const modifiedSTR1 = STR1.split('.').filter(Boolean).join(' ');