console.log( Math.ceil(3.33) );
console.log( Math.round(3.5) );
console.log( Math.floor(3.5) );

// random() : 0이상 ~ 1미만의 수를 랜덤으로 가져옴
console.log( Math.random() );
let ran = Math.random();

// random() 메소드를 이용해서 1~10까지 랜덤으로 나오게 해주세요.
console.log( Math.floor(Math.random()*10) + 1);

//
console.log( ran );
for ( let i = 0; i < 1000000; i++ ) {
    ran = i;
}
console.log( ran );