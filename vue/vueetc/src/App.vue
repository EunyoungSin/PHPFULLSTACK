<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>

<!-- <ContainerComponent v-if="flg"></ContainerComponent>
<PostComponent v-if="!flg"></PostComponent>
<button @click="flg = !flg">클릭</button> -->

<router-link to = "/">홈으로</router-link><br>
<router-link to = "/post">post로</router-link>
<router-view></router-view>
</template>

<script>
// import ContainerComponent from './components/ContainerComponent.vue';
// import PostComponent from './components/PostComponent.vue';
import { ref } from 'vue';

export default {
  name: 'App',
  setup() {
    
  },
  data() {
    return {
      flg: true,
    }
  },
  components: {
    // ContainerComponent,
    // PostComponent,
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
