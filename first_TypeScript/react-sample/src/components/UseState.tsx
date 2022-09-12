// React HooksはHookによって関数コンポーネント中で状態やライフサイクルを扱うための機能です

/**useState / UseReducer ー状態のフック
コンポーネントは内部状態をもち、その状態の変化に応じて表示を変更できる

useStateは文字通り状態を扱うフック
useState()で一つの新しい状態を作成する。第一引数に渡した値が初期状態になる。
useState()の戻り値は配列で、配列の第一番に現在の状態を保持する変数、2番目に更新関数が入っています

const [状態, 更新関数] = useState(初期状態)
**/

import { useState } from 'react'

type CounterProps = {
    initialValue: number
}

const Counter = (props: CounterProps) => {
    const { initialValue } = props
    // カウントを保持する一つの状態をuseState()で宣言する。引数には初期値を指定する
    // countが現在の状態、setCountが状態を更新する関数

    //useStateを使ったコード
    const [count, setCount] = useState(initialValue)

    return (
        <div>
            <p>Count: {count}</p>
            {/* setCountを呼ぶことで状態を更新する */}
            <button onClick={() => setCount(count - 1)}>-</button>
            <button onClick={() => setCount((prevCount) => prevCount + 1)}>+</button>
        </div>
    )

}

export default Counter


// なんかエラーでできない
// initialValueに問題あり
