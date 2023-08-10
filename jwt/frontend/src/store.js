import { createStore } from 'vuex';
import router from './router';
import TokenController from './js/TokenController';
import ApiController from './js/ApiController';

// vuex 사용이유 : 옵션즈API가 관리 쉽고 속도 빠름. 만드는 어플리케이션의 크기가 커지면 커질수록, 자식이 부모 껄 받아 쓰려면 probs를 선언해야함.
// vuex를 쓰면 데이터를 한곳에서 집중해서 관리할 수 있어 데이터 관리가 용이.
const store = createStore({
    state() {
        return {
            isToken: false,
        }
    },
    mutations: {
        setToken(state, token) {
            TokenController.setToken(token);
            state.isToken = true;
        }
    },
    actions: {
        login(context, id) {
            ApiController.post('/api/token', {id: id})
            .then(res => {
                let token = res.data["token"];
                console.log(token);
                context.commit("setToken",token);
                router.push('main');
            })
            .catch(error => {
                console.log(error);
            });
        }
    }
});

export default store;