/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


import React from 'react'
import ReactDOM from 'react-dom'
import {Provider} from 'react-redux'
import {BrowserRouter as Router, Route} from 'react-router-dom'

import Texts from './pages/root/Texts'
import Second from './pages/root/Second'
import store from './StoreWrapper'
const App = ()=>{
    return(
        
        <Router>
            <Route exast path="/second/:inja" component = {Second} />
            <Route exast path="/" component = {Texts} />
        </Router>    
    )
}

if(document.getElementById('root')){
    ReactDOM.render(<Provider store = {store}><App /></Provider>, document.getElementById('root'))
}