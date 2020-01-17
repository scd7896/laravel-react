import produce from 'immer'
import { ADD_USER_LOGIN, RMV_USER_LOGIN } from '../action';
const root = document.querySelector('#root');

const initialState = {
    user_login : root.dataset? root.dataset.user_login : dataset(root, "user_login"),
    user_name : root.dataset? root.dataset.user_login : dataset(root, "user_login"),
}

const User = (state = initialState, action)=>{
    return produce(state, (draft)=>{
        switch(action.type){
            case ADD_USER_LOGIN :
                draft.user_login = action.data;
                break;
            case RMV_USER_LOGIN :
                draft.user_login = "";
                break;
            default  : break;
        }    
    })
}

export default User;