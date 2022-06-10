// import initialState from './state'

const mutations = {
    SET_STATE (state, listValue = []) {
        let box
        let attribute
        let value

        switch (listValue.length) {
            case 2:
                [box, value] = listValue
                state[box] = value
                break
            case 3:
                [box, attribute, value] = listValue
                state[box][attribute] = value
                break
            default:
                break
        }
    },
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