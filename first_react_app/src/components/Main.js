import React from "react";
import Lesson from "./Lesson";
import ContactForm from "./ContactForm";

class Main extends React.Component {
    render() {
        const lessonList = [
            {
                name: "HTML & CSS",
                image:
                    "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/html.svg",
                introduction:
                    "ナントカという教科書と好きなサービスのサイトを参考に作ってみました",
            },
            {
                name: "JavaScript",
                image:
                    "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/es6.svg",
                introduction:
                    "JavaScriptとjQueryを使って、デザインカンプをもとにレスポンシブルサイトを作ってみました",
            },
            {
                name: "MySQL & Node.js",
                image:
                    "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/sass.svg",
                introduction:
                    "MySQL、SCSS、Node.jsを使って、DBへのデータ入力・読み取りができるサービスを作ってみました",
            },
            {
                name: "React & Firebase",
                image:
                    "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/react.svg",
                introduction:
                    "ReactとFirebaseでこのサイトをポートフォリオとして製作中です",
            },
        ];

        return (
            <div className="main-wrapper">
                <div className="main">
                    <div className="copy-container">
                        <h1>こんにちは</h1>
                        <h2>Shoheiのポートフォリオにようこそ！</h2>
                    </div>
                    <div className="lesson-container">
                        <h3 className="section-title">
                            こちらが今まで作ったものです
                        </h3>
                        {lessonList.map((lessonItem) => {
                            return (
                                <Lesson
                                    name={lessonItem.name}
                                    image={lessonItem.image}
                                    introduction={lessonItem.introduction}
                                />
                            );
                        })}
                    </div>
                    <div className="contact-container">
                        <h3>お問い合わせ</h3>
                        <ContactForm />
                    </div>
                </div>
            </div>
        );
    }
}

export default Main;
