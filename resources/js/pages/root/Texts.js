import React from 'react'
import {Link} from 'react-router-dom'
import {useSelector, useDispatch} from 'react-redux'
const Texts = ()=>{
    const {user_login} = useSelector(state=> state.user)
    return(
        <div>
            유저 로그인 : {user_login}
            <Link to = "/second/test">두번째 페이지로</Link>
        </div>
    )
}

export default Texts;