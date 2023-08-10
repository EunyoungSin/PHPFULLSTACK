<template>
  <div>
    <router-view></router-view>
  </div>
</template>

<script>
import router from './router';

export default {
  name: 'App',
  components: {
    
  },
  data() {
    return {
      token: '',
      input_id: '',
      user_id: '',
      err: '',
    }
  },
  methods: {
    login() {
      router.push('main');
    },
    // login(id) {
      // if (id === '') {
      //   this.err = '아이디를 입력해주세요.';
      // } else {
      //   axios.get('http://localhost:8000/api/token?id=' + id)
      //   .then(res => {
      //     console.log(res.data);
      //     this.user_id = res.data.user_id;
      //     this.input_id = '';
      //     this.token = res.data.token;
      //   })
      //   .catch(err => {
      //     if (err.status >= 400) {
      //       console.log(err);
      //     }
      //   });
    //   }
    // },
    logout() {
      router.push('login');
      // this.token = ''; // 토큰 초기화
      // this.user_id = ''; // 유저아이디 초기화
      // this.err = '';
    },
  },
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
