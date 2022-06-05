import Vuex from 'vuex'
import Vue from 'vue'
import emailModule from './email'
import userRegisterLoginModule from './user_register_login'

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
        'email': emailModule,
        'user' : userRegisterLoginModule
    }
})

export default store