/** useCall/useMemoはメモ化のフック
値や関数を保持し、必要のない子要素のレンダリングや計算を抑制するために使う

reactの再描画のタイミング
・propsや内部状態が更新された時
・コンポーネント内で参照しているContextの値が更新された時
・親コンポーネントが再描画された時

メモコンポーネントは親コンポーネントで再描画が発生しても、propsやcontextの値が変化したい場合は親コンポーネントによる西行画が発生しません
*/

import React, { memo, useState } from 'react'

type FizzProps = {
    isFizz: boolean
}

// 通常コンポーネントなので、再描画される
const Fizz = (props: FizzProps) => {
    const { isFizz } = props
    console.log(`Fizzが再描画されました, isFizz=${isFizz}`)
    return <span>{isFizz ? 'Fizz' : ''}</span>
}


type BuzzProps = {
    isBuzz: boolean
}

// メモかした関数コンポーネントなので再描画されない
const Buzz = (props: BuzzProps) => {
    const { isBuzz } = props
    console.log(`Buzzが再描画されました, isBuzz=${isBuzz}`)
    return (
        <span>
            {isBuzz ? 'Buzz' : ''}
        </span>
    )
}


export const Parent = () => {
    const [count, setCount] = useState(1)
    const isFizz = count % 3 === 0
    const isBuzz = count % 5 === 0

    console.log(`Parentが再描画されました, count=${count}`)
    return (
        <div>
            <button onClick={() => setCount((c) => c + 1)}>+1</button>
            <p>{`現在のカウント: ${count}`}</p>
            <p>
                <Fizz isFizz={isFizz} />
                <Buzz isBuzz={isBuzz} />
            </p>
        </div>
    )
}
