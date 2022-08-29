import React from "react";

class Footer extends React.Component {
    render() {
        return (
            <div className="footer">
                <div className="footer-inner">
                    <div className="footer-logo">
                        {/* <img
                            src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/type_logo.png"
                            alt=""
                        /> */}
                        <p>Filled With Exhilaration</p>
                    </div>
                    <ul className="footer-list">
                        <li>サイト概要</li>
                        <li>つぶやき</li>
                        <li>お問い合わせ</li>
                    </ul>
                </div>
            </div>
        );
    }
}

export default Footer;
