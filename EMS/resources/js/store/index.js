import { createStore } from "vuex";

const account = {
    state: ()=>({
        errors:{}
    }),
    actions:{

    },
    mutations: {

    }
}

const store = createStore({
    modules:{
        account: account
    }
});

export default store