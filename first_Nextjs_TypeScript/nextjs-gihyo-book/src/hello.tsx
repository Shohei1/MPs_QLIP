import { useState } from 'react'
const CustomButton = (props: Props) => {
    /**
     * resetAtと...buttonPropsをPropsとして定義しないとダメなことがわかる
     * restAtはsetTimeoutの第二引数だから数字
     * ...buttonPropsはスプレッド演算子？
     */

    const { resetAt, ...buttonProps } = props
    const [disabled, setDisabled] = useState(false)

    return (
        <button
            disabled={disabled}
            {...buttonProps}
            onClick={(e) => {
                if (!buttonProps.onClick) return
                buttonProps.onClick(e)
                setDisabled(true)
                setTimeout(() => setDisabled(false), resetAt)
            }}
        />
    )
}

type Props = {
    resetAt: number
} & React.DetailedHTMLProps<
    React.ButtonHTMLAttributes<HTMLButtonElement>,
    HTMLButtonElement
>

//下記が最初に書いたもの。問題文の「JSX.IntrinsicElements.buttonタグが受け取れる全てのprops」に反するかなと思い上記に変更。
// type Props = {
//     resetAt: number,
//     onClick: (event: React.MouseEvent<HTMLButtonElement, MouseEvent>) => void,
// }
export default CustomButton
