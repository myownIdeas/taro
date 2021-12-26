import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router,Routes,HashRouter,Link, Route} from "react-router-dom";

class Header extends Component{
    render(){

        return (
            <header>
                <div className="container">
                    <div className="navbar">
                        <Link to="#" className='brandName'><img src="frontend/images/logo.svg" alt="" /></Link>
                        <Link to="#" className='btn btn-primary'>Get Early Access</Link>
                    </div>
                </div>
            </header>
        )
    }
}

export default Header;