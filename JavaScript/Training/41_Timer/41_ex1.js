const timeOut = setInterval(time, 1000);

document.addEventListener("DOMContentLoaded", function() {
    // 시간을 딜레이 없이 나타내기위한 선 실행
    time();
    // 이후 1초에 한번씩 시간을 갱신한다.
    timeOut;
});

const btn1 = document.getElementById('btn1');
btn1.onclick = function() {
    clearInterval(timeOut);
}

const showTime = document.getElementById("timer");
function time() {
    const date = new Date();
    const hour = date.getHours();
    const min = date.getMinutes();
    const sec = date.getSeconds();
    const str = "AM";
    //오전, 오후 구분
    if(hour > 12){
        str = "PM"
        hour -= 12;// h= h-12
    }
    showTime.innerHTML = str + " " + hour + ":" + addzero(min) + ":" + addzero(sec);
}

// 1자리수의 숫자인 경우 앞에 0을 붙여준다.
function addzero(num) {
    if(num < 10) { num = "0" + num; }
        return num;
}

// padStart