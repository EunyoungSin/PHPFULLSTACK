<template>
  <img alt="Vue logo" src="./assets/logo.png">

  <!-- 네비 -->
  <Navi/>
  <!-- <div class="nav">
    <a>홈</a>
    <a>상품</a>
    <a>기타</a>
  </div> -->

  <!-- 모달 -->
  <div class="bg_black" v-if="modalFlg">
    <div class="bg_white">
      <img :src="products[productNum].imgSrc">
      <h4>상품명: {{ products[productNum].name }}</h4>
      <p>설명: {{ products[productNum].content }}</p>
      <p>가격: {{ products[productNum].price }}</p>
      <span>갯수: {{ products[productNum].count }}</span>
      <button @click="plus(productNum)">▲</button>
      <button @click="minus(productNum)">▼</button>
      <p>총 가격: {{ products[productNum].price * products[productNum].count }}</p>
      <button @click="modalFlg=false">닫기</button>
    </div>
  </div>

  <!-- 상품리스트ㅡ -->
  <div v-for="(item, i) in products" :key="i">
    <img :src="item.imgSrc">
    <h4 @click="openModal(i)">{{ item.name }}</h4>
    <p>{{ item.price }}원</p>
    <p>{{ item.count }}개</p>
    <p>{{ item.price * item.count }}원</p>
    <!-- <button v-on:click="count++">수량증가</button><span>{{ count }}</span> -->
    <!-- <button @click="item.count++">수량증가</button><span>{{ item.count }}</span> -->
  </div>

  <!-- if -->
  <p v-if="1 == 2">if문 테스트1</p>
  <p v-if="1 == 1">if문 테스트2</p>

  <!-- <div>
    <h4 v-for="name in products" :key="name">{{ name }}</h4>
    <h4 v-for="(name, i) in products" :key="i">{{ i }}</h4>
    <h4 v-for="(item, i) in products" :key="i">{{ item.name }}</h4>
    <p v-for="(item, i) in products" :key="i">{{ item.price }}</p>
  </div> -->
  
  <!-- <div>
    <h4>{{ product1 }}</h4>
    <p>{{ price1 }}원</p>
  </div> -->
      <!-- <h4 id="product">바지</h4> -->
  <!-- <div>
    <h4 :style="styleR">{{ product2 }}</h4>
    <p>{{ price2 }}원</p>
  </div> -->
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import data from './assets/js/data.js';

import Navi from './components/navi.vue';

// let h4Element = document.getElementById("product");
// h4Element.textContent = "바지";

export default {
  name: 'App',
  // components: {
  //   HelloWorld
  // }
  data() { // 데이터 바인딩
  return {
      products: data,
      modalFlg: false,
      productNum: 0,
      product1: '양말',
      price1: '30만',
      product2: '바지',
      price2: '50만',
      styleR: 'color:red',
    }
  },
  methods: { // 함수를 설정하는 영역
    plus(i) {
      this.products[i].count++;
    },
    minus(i) {
      this.products[i].count--;
    },
    openModal(i) {
      this.modalFlg = true;
      this.productNum = i;
    },
  },
  components: { // 컴포넌트 정의
    Navi,    
    }
}
</script>

<style>
@import url('./assets/css/app.css');

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
