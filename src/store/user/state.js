import { deepFreeze } from "~/ulits/function";

const initialState = () => ({
    name: '',
    email: '',
    password: '',
    confirm_password: '',
    accept_terms: '',
    roleId: '',
    roomId: '',
    profileId: 1
})

export default deepFreeze(initialState)