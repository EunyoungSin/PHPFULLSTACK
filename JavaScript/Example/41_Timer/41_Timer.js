// 타이머 함수

// 1. setTimeout() / clearTimeout()
const timeOUT = setTimeout(() => console.log('A'), 2000); // 타이머 셋팅
clearTimeout(timeOUT); // 타이머 제거

// 2. setInterval() / clearInterval()
const myInterval = setInterval(() => console.log('A'), 1000); // 인터벌 셋팅
clearInterval(myInterval) // 인터벌 제거

let cnt = 0;
const five = setInterval(function(){
    cnt++;
    console.log(cnt);
    if(cnt === 5) {
        clearInterval(five);
    }
}, 1000);