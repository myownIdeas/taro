import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Routes, HashRouter, Link, Route } from "react-router-dom";


import Home from "./Home.js";
import About from "./About.js";
import HeaderWrap from "./Header.js";
import FooterWrap from "./Footer.js";
import MobileVerification from "./MobileVerification";
export default class Main extends Component {

    render() {
        return (
            <React.Fragment>
                <Router>
                    <HeaderWrap />
                    <div className='wrapper'>
                        <Routes>
                            <Route path="/" element={<Home />}></Route>
                            {/*<Route exit path="/merchant-plugin" element={<MobileVerification />}></Route>*/}
                        </Routes>
                        <FooterWrap />
                    </div>
                </Router>
            </React.Fragment>

        )
    }
}
if (document.getElementById('app')) {
    ReactDOM.render(<Main />, document.getElementById('app'));
}
