// 데이터 저장소
import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    state() {
        return {
            boardData: [], // 게시글 데이터
            lastId: '', // 가장 마지막에 로드된 게시물의 ID
            addBtnFlg: true, // 더보기 버튼 표시용 flg
            tabFlg: 0, // 탭UI flg(0:메인, 1:필터, 2:작성)
            imgUrl: '', // 이미지 url
            filter: '', // 필터명
            postImg: null,
        }
    },
    mutations: { // 함수
        // 초기 데이터 셋팅용. 배열타입
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length - 1].id);
        },
        // 더보기 데이터 셋팅용. 객체타입
        addBoardData(state, data) {
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        // 작성글 데이터 셋팅용
        addWriteData(state, data) {
            state.boardData.unshift(data);
            // this.commit('changeLastId', data.id);
        },
        // lastId 변경
        changeLastId(state,id) {
            state.lastId = id;
        },
        // 탭UI flg 변경
        changeTabFlg(state,num) {
            state.tabFlg = num;
        },
        // 이미지 url 변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
        },
        // 이미지 필터 변경
        changeFilter(state, filter) {
            state.filter = filter;
        },
        // 초기화
        clearState(state) {
            state.filter = '';
            state.imgUrl = '';
        },
        // 업로드 이미지 변경
        changePostImg(state, postImg) {
            state.postImg = postImg;
        },
    },
    actions: {
        // 메인 게시글 습득
        getMainList(context) {
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                // console.log(res.data);
                context.commit('createBoardData',res.data);
            })
            .catch ( err => {
                console.log(err);
            })
        },
        // 게시글 추가 습득
        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                if(res.data){
                    context.commit('addBoardData',res.data);
                }
                else{
                    context.state.addBtnFlg = false; // 한군데에서만 쓰니까 mutations에 함수 만들지않고 생략
                    alert('더 이상 표시할 내용이 없습니다.');
                    // document.getElementById('moreBtn').style.display = 'none';
                }
            })
            .catch ( err => {
                console.log(err);
            })
        },
        // 게시글 작성. REST API 방식에 따라 POST방식
        writeContent(context) {
            let content = document.getElementById('content'); //id로 가져오면 유일함.
            const data = {
                name: '신은영',
                filter: context.state.filter,
                img: context.state.postImg,
                content: content.value,
            };

            const header = {
                headers: { // 컨텐트 타입 변환
                    'Content-Type' : 'multipart/form-data',
                }
            };

            axios.post('http://192.168.0.66/api/boards', data, header)
            .then(res => {
                // 처리처리. validation 추가
                context.commit('addWriteData', res.data);
                context.commit('changeTabFlg', 0);
                context.commit('clearState');
            })
            .catch( err => {
                console.log(err, data, content);
            })
        },
    }
})

// 뷰를 쓴다는 건 서버의 부담을 줄여주는 것을 계속 생각해야함.

export default store