let arr = [1, 2, 3, 4, 5];

// 배열에 값 추가
// PHP의 경우 $arr[] = 1;

// push() 메소드 : 배열에 값 추가
arr.push(6); 

// delete : 배열의 값 삭제(인덱스는 남아 있다.)
delete arr[5];

// splice() 메소드 : 배열의 요소를 삭제 또는 교체
arr = [1, 2, 3, 4, 5];
// arr.splice(2, 1); // 배열에서 arr[2]가 삭제
// arr.splice(2, 0, 3); // 배열의 arr[2]뒤에 값이 3인 인덱스를 추가
// arr.splice(2, 1, 3); // 배열의 arr[2]의 값을 3으로 변경
// arr.splice(2, 1, 3, 5, 6, 7); // 3번째 매개변수 부터는 가변파라미터로 모든 값을 추가

// indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용
let arr2 = [1, 2, 3, 4, 5];
arr2.indexOf(3);

// lastIndexOf() 메소드 : 배열에서 가장 마지막 위치의 특정 요소를 찾는데 사용
arr2 = [1, 2, 3, 4, 3, 5, 6, 6, 1];
arr2.lastIndexOf(6);

// 예제
let fileName = 'javaScript.log.php';
fileName = 'ttt.aa.b';
// 아래처럼 콘솔에 출력해 주세요. ( indexOf(), lastIndexof(), slice() 메소드를 이용 )
// javaScript
// log
// php

// fileName.indexOf(".");
// 10
// fileName.lastIndexOf(".");
// 14

// let fstName = fileName.indexOf(".");
// let lastName = fileName.lastIndexOf(".");

// fileName.slice(0, fstName);
// 'javaScript'
// fileName.slice(fstName + 1, lastName);
// 'log'
// fileName.slice(lastName + 1);
// 'php'

// console.log(fileName.slice(0, fstName));
// console.log(fileName.slice(fstName + 1, lastName));
// console.log(fileName.slice(lastName + 1));

// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환
let arrCon1 = [1, 2, 3];
let arrCon2 = [10, 20, 30];
let arrCon4 = [100, 200, 300];
let arrCon3 = arrCon1.concat( arrCon2, arrCon4 );
console.log( arrCon3 );

// includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별 (있으면 true, 없으면 false)
let arrInc = [1, 2, 3, 4];
console.log( arrInc.includes( 7 ) );

// sort() 메소드 : 배열의 요소를 아스키코드 기준으로 반환
const arrSort = [ 6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40];
arrSort.sort(); // [100, 3, 3, 40, 5, 5, 6, 7, 8, 80, 92]
// 오름차순 정렬
arrSort.sort(
    function( a, b ) {
        return a - b;
    }
);
// 내림차순 정렬
arrSort.sort( ( a, b ) => b - a );

// join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열을 만들어 줍니다.
const arrJoin = [ "안녕", "하세", "요" ];
arrJoin.join(''); // '안녕하세요'
arrJoin.join('/'); // '안녕/하세/요'

// every() 메소드 : 배열의 요소들이 주어진 함수를 통과하는지 판별
let arrEvery = [1, 2, 3, 4, 5];
let result =
    arrEvery.every( function ( val ) {
                        return val <= 4;
                    });
console.log(result);

// 모든 요소의 2로 나눈 나머지가 0인지 판별해주세요.
arrEvery = [2, 4];
let res =
    arrEvery.every( function ( val ) {
                        return val % 2 === 0;
                    });

let res2 = arrEvery.every( ( val ) => val % 2 === 0 );
// let res2 = arrEvery.every( val => val % 2 === 0 ); // 매개변수(val)가 1개면 괄호 생략가능
console.log(res);
console.log(res2);

// some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별
const arrSome = [1, 2, 3, 4, 5];
let result2 = arrSome.some( val => val >= 6 );
console.log ( result2 );

// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1, 2, 3, 4, 5];
let result3 = arrFilter.filter( val => val >= 3 );
console.log ( result3 );