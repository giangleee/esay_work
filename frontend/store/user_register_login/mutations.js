// import initialState from './state'

const mutations = {
    SET_USER_NAME(state, value) {
        state.name = value
    },
    SET_USER_EMAIL(state, value) {
        state.email = value
    },
    SET_USER_PASSWORD(state, value) {
        state.password = value
    },
    SET_USER_ROLE_ID(state, value) {
        state.role_id = value
    },
    SET_USER_ROOM_ID(state, value) {
        state.room_id = value
    }
}

export default mutations