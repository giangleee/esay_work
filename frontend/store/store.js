import Vuex from 'vuex'
import Vue from 'vue'
import emailModule from './email'

Vue.use(Vuex)

const store = {
    modules: {
        'email': emailModule,
    }
}

export default new Vuex.Store(store)