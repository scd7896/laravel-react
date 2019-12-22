
import React from 'react'
import ReactDOM from 'react-dom'
import TestComponent from './components/TestComponent'
const App = ({test})=>{
    return(
        <div>
            <TestComponent />
            <a href = "/">루트는 어디?</a>
            <p>{test}</p>
        </div>
    )
}
let root = document.getElementById('root');
if(root !== undefined){
    const test = root.getAttribute('test')
    ReactDOM.render(<App test = {test}/>, document.getElementById('root'))
}