<template>

  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li v-if="$store.state.tabFlg !== 0" @click="$store.commit('changeTabFlg', 0); $store.commit('clearState');" class="header-button header-button-left">취소</li>
      <li>
        <img class="logo" alt="Vue logo" src="./assets/logo3.png">
      </li>
      <li v-if="$store.state.tabFlg == 1" @click="$store.commit('changeTabFlg', 2)" class="header-button header-button-right">다음</li>
      <li v-if="$store.state.tabFlg == 2" @click="$store.dispatch('writeContent');" class="header-button header-button-right">작성</li>
    </ul>
  </div>

  <!-- 컨텐츠 -->
  <ConteinerComponent></ConteinerComponent>
  <!-- <PostComponent></PostComponent> -->

  <button v-if="$store.state.addBtnFlg && $store.state.tabFlg == 0" @click="$store.dispatch('getMoreList');" id="moreBtn">더보기</button>

  <!-- 푸터 -->
  <div class="footer">
    <div class="footer-button-store">
      <label for="file" class="label-store">+</label>
      <!-- label:file + 눌렀을 때 파일 업로드 창이 뜸 -->
      <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
      <!-- @change:이미지 변화가 생겼을 때 -->
    </div>
  </div>

</template>

<script>
import ConteinerComponent from './components/ConteinerComponent.vue';
// import PostComponent from './components/PostComponent.vue';

export default {
  name: 'App',
  created() {
    this.$store.dispatch('getMainList');
  },
  methods: {
    updateImg(e) { // e: event
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl',imgUrl);
      this.$store.commit('changeTabFlg',1);
      this.$store.commit('changePostImg',file[0]);
      e.target.value = ''; // 이벤트 타겟 밸류 초기화
    }
  },
  components: {
    ConteinerComponent,
    // PostComponent,
}
}
</script>

<style>
@import url('./assets/css/common.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
