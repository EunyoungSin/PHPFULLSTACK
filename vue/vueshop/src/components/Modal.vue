<template>
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
            <img :src="products[productNum].imgSrc">
            <h4>상품명: {{ products[productNum].name }}</h4>
            <p>설명: {{ products[productNum].content }}</p>
            갯수: <input type="text" v-model="inpuNum">
            <p>가격: {{ products[productNum].price * inpuNum }}</p>
            <p>
                <!-- 갯수: <input type="text" v-model="inpuNum"> -->
                <!-- <button @click="$emit('plus')">▲</button>
                <button @click="$emit('minus')">▼ </button> -->
            </p>
            <button @click="$emit('closeModal');">닫기</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Modal',
        props: {
            modalFlg: Boolean,
            products: Array,
            productNum: Number,
        },
    data() {
        return {
                inpuNum: ''
            }
        },
        watch : { // 실시간 감시 함수 정의 영역
            inpuNum(input) {
                if( input > 10) {
                    alert('10 이상은 입력하면 안 되는 숫자입니다.');
                    this.inpuNum ='10';
                }
                else if( input < 0) {
                    alert('0 미만은 입력하면 안 되는 숫자입니다.');
                    this.inpuNum = '0';
                }
                else if ( input >= 0 && input <= 10 ) {
                    '';
                }
                else {
                    alert('0 ~ 10 사이의 숫자만 입력해주세요.');
                    this.inpuNum = '';
                }
            },
        }
    }
</script>

<style>
    
</style>