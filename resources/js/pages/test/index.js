
import React from 'react'
import ReactDOM from 'react-dom'
import {BrowserRouter as Router, Route, Link} from 'react-router-dom'
import TestComponent from './components/TestComponent'
import LinkTest from './components/LinkTest'
const App = ({test})=>{
    console.log("바뀌니")
    return(
        <Router>
            <Route exact path = "/test/start/:name" component = {TestComponent} />
            <Route exact path = "/test" component = {LinkTest} />
            <p><Link to = "/test/start/1번">1번</Link></p>
            <p><Link to = "/test/start/2번">2번</Link></p>
        </Router>
    )
}
let root = document.getElementById('root');
if(root !== undefined){
    const test = root.getAttribute('test')
    ReactDOM.render(<App test = {test}/>, document.getElementById('root'))
}