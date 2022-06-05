import { deepFreeze } from "~/ulits/function";

const initialState = () => ({
    name: '',
    email: '',
    password: '',
    confirm_password: '',
    accept_terms: '',
    role_id: '',
    room_id: '',
    profile_id: 1
})

export default deepFreeze(initialState)