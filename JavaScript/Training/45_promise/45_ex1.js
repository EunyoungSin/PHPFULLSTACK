// setTimeout(function() {
//     console.log('A');
// }, 3000);

// setTimeout(function() {
//     console.log('B');
// }, 2000);

// setTimeout(function() {
//     console.log('C');
// }, 1000);

// 1. 콜백함수를 이용해서 A,B,C 순서로 콘솔에 출력해주세요.
// setTimeout(() => {
//     console.log('A');
//     setTimeout(() => {
//         console.log('B');
//         setTimeout(() => {
//             console.log('C');
//         }, 1000);
//     }, 2000);
// }, 3000);

// 2. promise를 이용해서 A,B,C 순서로 콘솔에 출력해주세요.
//  ( Promise를 함수로 등록해서 구현 )

const A = 'A';
const B = 'B';
const C = 'C';

function delay(ms) {
    return new Promise((resolve) => {
        setTimeout(resolve, ms);
    });
}

delay(3000)
.then(() => {
    console.log(A);
    return delay(2000);
})
.then(function() {
    console.log(B);
    return delay(1000);
})
.then(function() {
    console.log(C);
})