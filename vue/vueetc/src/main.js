import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

createApp(App)
    .use(router)
    // .use(vuex)
    .mount('#app')
