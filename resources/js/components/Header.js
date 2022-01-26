import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router,Routes,HashRouter,useLocation,Link, Route} from "react-router-dom";

class Header extends Component{

    constructor(state) {
        super(state);


        this.showSubscribe = this.showSubscribe.bind(this);

    }
     showSubscribe(e) {
        e.preventDefault();
        $('#subscribeModal').modal('show');
    }
    render(){

        return (
            <>
            <header className='site-header'>
                <div className="container-fluid container-taro">
                    <div className="site-logo">
                        <Link to="#" className='brandName'><img width="143px" src="frontend/images/taro_logo.png" alt="" /></Link>
                    </div>
                    <Link to="#" className='btn btn-primary' onClick={this.showSubscribe}>Get Early Access</Link>
                </div>
            </header>
            </>
        )
    }
}

export default Header
