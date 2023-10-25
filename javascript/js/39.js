// 1.DOM (document obeject model)이란? - 교재 P.679 그림 참조
//- 웹 문서를 제어하기 위해서 웹 문서를 객체화 한 것
//- DOM API를 통해서 HTML의 구조나 내용 또는 스타일등을 동적으로 조작 가능

// 2. 요소 섡택
// 2-1. 고유한 ID로 요소 선택

const TITLE = document.getElementById('title');
const SUBTITLE =document.getElementById('subtitle');

// 2-2. 태그명으로 요소를 선택
const H2 = document.getElementsByTagName('h2');
H2[0].style.color = 'blue';

// 2-3. 클래스로 요소를 선택
const NONE = document.getElementsByClassName('none-li');

// 2-4. CSS 선택자를 사용해 요소를 찾는 메서드
 const S_ID = document.querySelector('#subtitle2');
 const S_NONE = document.querySelector('.none-li');

//      querySlelector() : 복수의 요소라면 전부 선택
const S_NONE_ALL = document.querySelector('.none-li');

// --------------------
// 3. 요소 조작
// --------------------
// textContent : 순수한 텍스트 테이블

TITLE.textContent = '<p>탕후루</p>';

// innerHTML : 태그는 태그로 인식해셔ㅓ 잔달, 이전의 태그들은 모두 제거
TITLE.innerHTML = '<p>맛탕설탕우당탕탕</p>';
const TEXT = document.getElementById('intxt');
TEXT.placeholder = '냥냥뇽녕냥';
Text.classlist = '늉늉늉뇽녕';

// ** 몇몇 속성들은 DOM객체에서 바로 설정 가능
// ex) INTXT.placeholder = '바로 접근 가능';


// removeAttribute
INTXT.removeAttribute('placeholder');
// --------------------
// 4. 요소 스타일링
// --------------------
TITLE.style.color = 'pink';

// classList : 클래스로 스타일 추가

TITLE.classList.add('class1','class2', 'class3');
TITLE.classList.remove('class1','class3');

