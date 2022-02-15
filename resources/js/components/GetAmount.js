import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router,Routes,HashRouter,useLocation,Link, Route} from "react-router-dom";
import MobileVerification from "./MobileVerification";
class GetAmount extends Component{

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
                <MobileVerification > </MobileVerification>
            </>
        )
    }
}

export default GetAmount
