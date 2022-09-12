/** useReducerは状態を扱うための、もう一つのフック
複雑な状態遷移を新プリに記述できる。また、配列やオブジェクトなどの複数のデータをまとめたものを状態をして扱う場合に用いいることが多い
useStateよりも複雑なものに向いている
useStateでは更新関数に次の状態を直接渡したが、useReducerでは更新関数（dispatch）にactionと呼ばれるデータを渡す
 */

import { useReducer } from 'react'

type Action = 'DECREMENT' | 'INCREMENT' | 'DOUBLE' | 'RESET'

const reducer = (currentCount: number, action: Action) => {
    switch (action) {
        case 'INCREMENT':
            return currentCount + 1
        case 'DECREMENT':
            return currentCount - 1
        case 'DOUBLE':
            return currentCount * 2
        case 'RESET':
            return 0
        default:
            return currentCount
    }
}

type CounterProps = {
    initialValue: number
}

const Counter2 = (props: CounterProps) => {
    const { initialValue } = props

    const [count, dispatch] = useReducer(reducer, initialValue)

    return (
        <div>
            <p>Count: {count}</p>
            {/* dispatch関数にActionを渡して、状態を更新します */}
            <button onClick={() => dispatch('DECREMENT')}>-</button>
            <button onClick={() => dispatch('INCREMENT')}>+</button>
            <button onClick={() => dispatch('DOUBLE')}>x2</button>
            <button onClick={() => dispatch('RESET')}>Reset</button>
        </div>
    )

}

export default Counter2
