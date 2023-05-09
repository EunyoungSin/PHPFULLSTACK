// console.log('A');
// console.log('B');
// console.log('C');
// console.log('D');

// 비동기 처리 방식

// console.log('A');
// setTimeout(() => {
//     console.log('B');
// }, 1000);
// console.log('C');
// A,C,B 순서로 출력됨

// const a = 2;
// const b = 3;
// const sum = function() {
//     setTimeout(()=> {
//         return a + b;
//     }, 1000);
// }
// console.log(sum()); // undefined가 출력됨.

// 비동기 처리에서의 콜백 지옥
// setTimeout(() => {
//     console.log('A');
//     setTimeout(() => {
//         console.log('B');
//         setTimeout(() => {
//             console.log('C');
//         }, 1000);
//     }, 2000);
// }, 3000);
// A,B,C 순서로 출력됨


// 로그인 콜백 지옥 체험

// const Login = {
//     chkInput(id, pw, success, error) {
//         setTimeout(() => {
//             if(id !== '' && pw !== '') {
//                 success({chkId: id, chkPw: pw});
//             } else {
//                 error(new Error('잘못 입력 하셨습니다.')); // 객체 생성
//             }
//         }, 500);
//     }
//     , loginUser(id, pw, success, error) {
//         setTimeout(() => {
//             if(id === 'php506' && pw === '506') {
//                 success(id);
//             } else {
//                 error(new Error('없는 유저입니다.')); // 객체 생성
//             }
//         }, 500);
//     }
//     , chkAuth(id, success, error) {
//         setTimeout(() => {
//             if(id === 'php506') {
//                 success({authId: id, auth: 'admin'});
//             } else {
//                 error(new Error('권한이 없습니다.')); // 객체 생성
//             }
//         }, 500);
//     }
// }

// const id = 'php506';
// const pw = '506';

// Login.chkInput(
//     id
//     , pw
//     , fn
//     , chkData => {
//         Login.loginUser(
//             chkData.chkId
//             , chkData.chkPw
//             , loginId => {
//                 Login.chkAuth(
//                     loginId
//                     , authData => { console.log(`${authData.AuthId}유저님, 권한은 ${authData.auth} 입니다.`); }
//                     , authError => { console.log(authError.message); }
//                 )
//             }
//             , loginError => { console.log(loginError.message); }
//         )
//     }
//     , chkError => { console.log(chkError.message); }
// )


// 콜백 함수

function myCallback(i) {
    return i + 1;
}

function printNum(fn) {
    console.log(fn(4));
}

printNum(myCallback);