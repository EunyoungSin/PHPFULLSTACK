// function delay() {
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime) {}
//     console.log('B');
// }

// console.log('A');
// delay();
// console.log('C');

function delay2() {
    return new Promise(function(resolve) {
    const delayTime = Date.now() +2000;
    while(Date.now() < delayTime) {}
    resolve('B');
    });
}

// function delay2() {
//     return new Promise((resolve) => {
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime) {}
//     resolve('B');
//     });
// }

// console.log('A');
// delay2().then(data => console.log(data));
// console.log('C');

// 스택자료구조론

// 3. await : async가 붙은 함수안에서만 사용 가능
function mydelay(ms) {
    return new Promise( resolve => setTimeout(resolve, ms) );
}

async function getA() {
    await mydelay(1000);
    return 'A';
}

async function getB() {
    await mydelay(2000);
    return 'B';
}

// promise 방식으로 출력
// getA()
// .then(strA => {
//     return getB()
//         .then(strB => console.log(`${strA} : ${strB}`))
// });

// async를 이용할 경우
async function getAll() {
    const strA = await getA();
    const strB = await getB();

    console.log(`${strA} : ${strB}`);
}
getAll();

// 병렬처리 방법
async function getAll3() {
    Promise.all([getA(), getB()])
    .then(all => console.log(all.join(' : ')));
}
getAll3();

