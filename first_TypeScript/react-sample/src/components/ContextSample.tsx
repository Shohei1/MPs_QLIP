// Contextはprops以外のデータを渡せる機能
//Contextを用いることでデータを直接親から渡さなくても大丈夫になる
// またpropsバケツリレーをしなくても良くな
// ContextではProviderとConsumerという二つにコンポーネントを利用する
//Providerにデータを渡し、Consumerがデータを受け取る

import React from 'react'

const TitleContext = React.createContext('')

const Title = () => {
    return (
        <TitleContext.Consumer>
            {(title) => {
                return <h1>{title}</h1>
            }}
        </TitleContext.Consumer>
    )
}

const Header = () => {
    return (
        <div>
            <Title />
        </div>
    )
}

const Page = () => {
    const title = 'React Book'

    return (
        <TitleContext.Provider value={title}>
            <Header />
        </TitleContext.Provider>
    )
}

export default Page

//Providerは入れ子にでき、Consumerから見て一番近いProviderのデータを取得する。また、useContextではComsumerを使わずにContextのデータを参照できる
