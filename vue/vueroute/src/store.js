import { createStore } from 'vuex';
 
const store = createStore({
    state() {
        return  {
            phptest: 'vuex 테스트용 입니다.',
        }
    },
});

export default store;
