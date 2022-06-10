import Vuex from 'vuex'
import Vue from 'vue'
import emailModule from './email'
import userModule from './user'

Vue.use(Vuex)

export const store = new Vuex.Store({
    modules: {
        'email': emailModule,
        'user' : userModule
    }
})

export default store