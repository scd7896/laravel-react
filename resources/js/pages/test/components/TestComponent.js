import React from 'react'
import {Link} from 'react-router-dom'
const TestComponent = ({match})=>{
    return(
        <div>
            <Link to = "/test">루트로감</Link>
            <a href = "/">아예 첫페이지</a>
            <p>{match.params.name}</p>
        </div>
    )
}

export default TestComponent