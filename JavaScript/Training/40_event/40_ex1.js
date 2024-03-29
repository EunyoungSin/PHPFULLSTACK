// 1. 버튼을 클릭시 아래 내용의 알러트가 나옵니다.
    //"안녕하세요."
    //"숨어있는 div를 찾아보세요."

// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다. 들킨 상태에서는 알러트가 안나옵니다.
    //"두근두근"

// 3. 2번의 영역을 클릭하면 배경색이 베이지색으로 바뀌어 나타납니다.
    //"들켰다!"

// 4. 3번의 상태에서 다시 한번 더 클릭허면 아래의 알러트를 출력하고 배경색이 흰색으로 바뀌어 안보이게 됩니다.
    //"다시 숨는다."

const div1 = document.querySelector('.div1');

function search(){
    alert('두근두근');
}

function onClick(){
    alert('들켰다!');
    document.querySelector('.div1').style.backgroundColor = "beige";
    div1.removeEventListener('mousedown', onClick);
    div1.removeEventListener('mouseenter', search);
    div1.addEventListener('mousedown', clickOff);
    }

function clickOff(){
    alert('다시 숨는다.');
    document.querySelector('.div1').style.backgroundColor = "white";
    div1.removeEventListener('mousedown', clickOff);
    div1.addEventListener('mousedown', onClick);
    div1.addEventListener('mouseenter', search);
    };

div1.addEventListener('mouseenter', search);
div1.addEventListener('mousedown', onClick);

Math.random