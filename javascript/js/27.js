let arr = [1,2,3,4,5];


// push 메소드 : 배열에 값을 추가
arr.push(6);

// splice() : 배열의 요소를 삭제 또는 교체

// arr.splice(2, 1); //배열의 arr[2]에서부터 n 개를 삭제

// arr.splice(4,1);
// arr.splice(2, 0, 10); //배열의 arr[2]에 값인 10인 인덱스를 추가
// arr.splice(2, 1, 'aaa');
// arr.splice(2, 0, 10, 11, 12, 13); 3번째 아규번트부터는 가변 파라미터로 모든 값을 추가

// indexOf() : 배열에서 특정 요소를 찾는데 사용
arr.indexOf(4);

arr = [1, 1, 1, 3, 4, 5, 6, 6, 6, 10];


// lastIndexOf() : 배열에서 특정 요소 중 가장 마지막에 위치한 요소를 찾는데 사용
arr = [1, 1, 1, 3, 4, 5, 6, 6, 6, 10];

// pop() : 배열의 가장 마지막 요소를 삭제하고 삭제한 요소의 값을 리턴
let i_pop = arr.pop();      

//  sort() : 배열을 정렬
// 적용시 원본 값도 변경하는 함수
arr = [ 5, 4, 3, 2, 5, 4, 1];
let arr_sort = arr.sort(function(a, b){
    return a - b;
}) ;
// 오름차순 정렬
arr.sort( (a, b) => a - b );

// 내림차순 정렬
arr.sort( (b, a) => b - a );

/ 원본 데이터 및매략 서로 새로 배율의 배율을 만든는 방법 ()Yalue copy);

ㅣlet arr1 = 2arr
// 원본 데이터와 별도의새로운 배경을 만드는 방법 (Value copyㅡ0. ㅡㅜ,ㅏㅓ)