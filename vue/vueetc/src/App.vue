<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  {{ data.name }}<br>
  <button @click="data.name = '김진아'">이름 바꾸기</button>
  <p></p>
  <!-- {{ test }} <br> -->
  {{ data2.name }}<br>
  <button @click="data2.name = '노수빈'">이름 바꾸기</button>
  <PostComponent :propsTest="1"></PostComponent>
<!-- <ContainerComponent v-if="flg"></ContainerComponent>
<PostComponent v-if="!flg"></PostComponent>
<button @click="flg = !flg">클릭</button> -->

<!-- <router-link to = "/">홈으로</router-link><br>
<router-link to = "/post">post로</router-link>
<router-view></router-view> -->
</template>

<script>
// import ContainerComponent from './components/ContainerComponent.vue';
import PostComponent from './components/PostComponent.vue';
import { ref, reactive } from 'vue';

export default { // 규모가 조금만 더 커져도 Reference보다 vuex가 더 편함
  name: 'App',
  setup() {
    let data = ref({
      name: '홍길동', 
      age: 20
    });
    let test = 'aaa';

    let data2 = reactive({
      name: '철수',
      age: 5,
    });

    // onMounted(() => {
    //   // 처리처리
    // });

    return { test, data, data2 };
  },
  data() {
    return {
      flg: true,
    }
  },
  components: {
    // ContainerComponent,
    PostComponent,
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
