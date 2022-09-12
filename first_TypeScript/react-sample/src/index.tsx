import React from 'react'
// import { createRoot } from 'react-dom/client'
import ReactDOM from 'react-dom/client'
// import ReactDOM from 'react-dom'
import './index.css'
// import App from './App';
import reportWebVitals from './reportWebVitals'
// import Hello from './components/Hello'
// import Name from './components/Name'
// import Message from './components/Message'
// import ContainerSample from './components/ContainerSample'
// import ContextSample from './components/ContextSample'
// import Counter from './components/UseState'
// import Counter2 from './components/UseReducer'
// import { Parent } from './components/Parent'
// import { Parent2 } from './components/UseCallback'
// import { UseMemo } from './components/UseMemo'
import { Clock } from './components/Clock'

const root = ReactDOM.createRoot(document.getElementById('root') as HTMLElement)
root.render(
    <React.StrictMode>
        {/* <Parents /> */}
        {/* <UseMemo /> */}
        <Clock />
    </React.StrictMode>
)

// ReactDOM.render(
//     <React.StrictMode>
//         {/* <Hello />
//         <Name />
//         <Message />
//         <ContainerSample />
//         <ContextSample />
//         <Counter initialValue={0} />
//         <Counter2 initialValue={0} /> */}
//         <Parent />
//         <Parent2 />
//     </React.StrictMode>,
//     document.getElementById('root')
// )

// const container = document.getElementById('app')
// const root = createRoot(container);
// root.render(<Parent2 />)

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals()
