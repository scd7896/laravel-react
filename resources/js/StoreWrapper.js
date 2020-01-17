import {createStore, compose, applyMiddleware} from 'redux';
import {composeWithDevTools} from 'redux-devtools-extension'

import rootReducer from './reducer'

const middleWares = [];
const enhancer = process.env.NODE_ENV === "production" ? 
    compose(applyMiddleware(...middleWares))
    :compose(applyMiddleware(...middleWares), composeWithDevTools())
export default createStore(rootReducer, {}, enhancer)

