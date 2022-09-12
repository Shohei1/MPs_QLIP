/**
Reactの副作用のためのフック
副作用はコンポーネントの描画と直接関係のない処理のこと
例えば、例としては描画されたDOMの手動で変更、ログを出力、タイマーのセット、データの取得など

useEffectは副作用を実行するためのフック
useEffectを使うことで、propsやstateが変更され、再描画が終わった後に処理が実行される
*/

import React, { useState, useEffect } from 'react'
import { deflate } from 'zlib'

const UPDATE_CYCLE = 1000

const KEY_LOCALE = 'KEY_LOCALE'

enum Locale {
    US = 'en-US',
    JP = 'ja-JP'
}


const getLocaleFromString = (text: string) => {
    switch (text) {
        case Locale.US:
            return Locale.US
        case Locale.JP:
            return Locale.JP
        default:
            return Locale.US
    }
}

export const Clock = () => {
    const [timestamp, setTimestamp] = useState(new Date())

    const [locale, setLocale] = useState(Locale.US)

    useEffect(() => {
        const timer = setInterval(() => {
            setTimestamp(new Date())
        }, UPDATE_CYCLE)

        return () => {
            //クリーンアップ関数
            clearInterval(timer)
        }
    }, [])

    useEffect(() => {
        const savedLocale = localStorage.getItem(KEY_LOCALE)
        if (savedLocale !== null) {
            setLocale(getLocaleFromString(savedLocale))
        }
    }, [])


    useEffect(() => {
        localStorage.setItem(KEY_LOCALE, locale)
    }, [locale])

    return (
        <div>
            <p>
                <span id='current-time-label'>現在時刻</span>
                <span>:{timestamp.toLocaleString(locale)}</span>

                <select
                    value={locale}
                    onChange={(e) => setLocale(getLocaleFromString(e.target.value))}>
                    <option value="en-US">en-US</option>
                    <option value="ja-JP">ja-JP</option>
                </select>
            </p>
        </div>
    )

}
