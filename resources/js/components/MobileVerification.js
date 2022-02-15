import React, {Component, useEffect, useState} from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Routes, HashRouter, Link,useLocation, Route,useSearchParams } from "react-router-dom";
import axios from "axios";



function MobileVerification(){
    const url = '';
    const initialState = { number: "" ,amount:'' };
    const [data, setData] = useState(initialState);
    const [searchParams, setSearchParams] = useSearchParams();
    useEffect(()=>{

        // axios.get(url + 'api/get-customer-records-by-uuid?uuid='+searchParams.get("uuid")).then(res => {
        //     setNumber(res.data.data.number);
        // });


    })
    function changeHandler(e) {
        const { name, value } = e.target;
        setData({ ...data, [name]: value });

    }
    function submitMobile(e){
        e.preventDefault();
        axios.post('http://localhost:3000/generate-otp-for-mobile',data).then(res => {
        if(res.data.data.customer){
            window.location.href = url+'verify-mobile';
        }else{
            alert('not sent');
        }
    })
    }

    return (
        <>
            <div className="card" >
                <form action="" onSubmit={(e) => { submitMobile(e) }}>
                <div className="card-body">
                        <h5 className="card-title">Verify Your Number</h5>
                    <input type="text" onChange={changeHandler} value={data.number} name="number" />
                    <input type="hidden" name="amount" value={data.amount} />
                    <br />
                    <br />
                    <button className="btn btn-primary">Submit Number</button>
                    </div>
                </form>
            </div>
        </>
    )
}
export default MobileVerification;
