import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Routes, HashRouter, Link, Route } from "react-router-dom";
import axios from "axios";
import swal from 'sweetalert';

function Home() {

    const initialState = { email: "" };
    const url = '';
    const [data, setData] = useState(initialState);
    const [formErrors, setformErrors] = useState({});
    const [isSubmit, setisSubmit] = useState(false);


    const clearState = () => {
        setData({ ...initialState });
    };

    function changeHandler(e) {
        const { name, value } = e.target;
        setData({ ...data, [name]: value });
    }
    const validate = (value) => {
        const error = {};
        const regex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/'

        if (!value.email) {
            error.email = 'email is required';
        }
        return error;
    };
    function formValidator(values) {
        const error = {};
        if (!values.email) {
            error.email = 'email is required';
        }
        return error;
    }
    function submitForm(e) {
        e.preventDefault();
        setformErrors(validate(data));

        // if(Object.keys(formErrors).length ===0 ){
        axios.post(url + 'api/saveEmail', data).then(res => {
            clearState();
            swal("Good job!", "You Email is Subscribed !", "success");
        })
        //  }

    };


    return (
        <>
            <section className="hero-main">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="col-lg-5">
                            <div className="text-content">
                                <img src="frontend/images/counter.svg" alt="" />
                                <h1>Pay in Four</h1>
                                <p>Split purchases into four equal payments over three months with <strong>Pakistan’s first licensed</strong>  and Shariah compliant  <strong>BNPL provider </strong>  </p>



                                <div className="img-holder d-block d-lg-none">
                                    <img src="frontend/images/iPhone2.png" alt="" className='iphone d-block d-sm-none' />
                                    <img src="frontend/images/app3.png" alt="" className='iphone d-none d-sm-block' />
                                    <img src="frontend/images/dashboard3.png" alt="" className='dashboard d-none d-sm-block' />
                                    <img src="frontend/images/dashboard2.png" alt="" className='dashboard d-block d-sm-none' />
                                    <img src="frontend/images/order2.png" alt="" className='order' />
                                </div>

                                <form action="" onSubmit={(e) => { submitForm(e) }} className='subscription-form'>
                                    <h4>Subscribe to get early access</h4>
                                    <div className="inputGroup">
                                        <div className="icon-prepend">
                                            <input type="text" required onChange={changeHandler} name="email" value={data.email} autoComplete="off" className='form-control' placeholder='Your email address' />
                                            <i><img src="frontend/images/envelope.svg" alt="" /></i>
                                        </div>
                                        <button type="submit"  className='btn btn-primary'>Subscribe</button>
                                    </div>
                                    <p className="note">No spam, notifications only about new products and updates. <br /> You can always unsubscribe.</p>
                                </form>
                            </div>
                        </div>
                        <div className="col-lg-7">
                            <div className="img-holder d-none d-lg-block">
                                <img src="frontend/images/iPhone.png" alt="iPhone.png" className='iphone' />
                                <img src="frontend/images/dashboard.png" alt="" className='dashboard' />
                                <img src="frontend/images/order.png" alt="" className='order' />
                            </div>
                        </div>
                    </div>
                </div>
                <img src="frontend/images/bg-hero.svg" alt="" className="bgImg" />
                <img src="frontend/images/ellipse2.svg" alt="" className="bgImg2" />


            </section>


            <section className='shariha'>
                <div className="container">
                    <div className="caption">
                        <h2>Shariah compliant, <br />flexible, and easy to use. </h2>
                        <p>We're changing the way you shop, and enabling <br /> you to pay on your own terms</p>
                    </div>
                    <div className="row">
                        <div className="col-md-4">
                            <div className="cardBox">
                                <div className="icon"><img src="frontend/images/shopingBag.svg" alt="" /></div>
                                <h4>Freedom</h4>
                                <p>Enjoy the freedom of paying how you want, when you want. By using Taro, you're able to enjoy the things you want sooner.</p>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="cardBox">
                                <div className="icon"><img src="frontend/images/hand.svg" alt="" /></div>
                                <h4>Pay in 4</h4>
                                <p>Our proprietary approval process has no impact your credit. Plus, the more you shop, the more your credit grows.</p>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="cardBox">
                                <div className="icon"><img src="frontend/images/smartphone.svg" alt="" /></div>
                                <h4>No impact your credit</h4>
                                <p>Pay in 4 with your favorite retailers through our app, website, or in-store, with no interest or fees.</p>
                            </div>
                        </div>
                    </div>
                    <div className="cardAnywhere">
                        <div className="cardOverlay">
                            <h2>Anywhere, Anytime: Pay in Four</h2>
                            <div className="row">
                                <div className="col-lg-6">
                                    <p>Leverage Taro to split payments at all your favorite retailers and manage your spending on the web or through our app, anytime & anywhere. </p>
                                </div>
                                <div className="col-lg-6">
                                    <form action="" className='subscription-form' onSubmit={(e) => { submitForm(e) }}>
                                        <div className="inputGroup">
                                            <div className="icon-prepend">
                                                <input type="text" required onChange={changeHandler} name="email" value={data.email} autoComplete="off" className='form-control' placeholder='Your email address' />
                                                <i><img src="frontend/images/envelope.svg" alt="" /></i>
                                            </div>
                                            <button type="submit" className='btn btn-primary'>Subscribe</button>
                                        </div>
                                        <p className="note">No spam, notifications only about new products and updates. <br /> You can always unsubscribe.</p>
                                    </form>
                                </div>
                            </div>
                            <img src="frontend/images/shapes.svg" alt="" className='shape' />
                        </div>
                    </div>
                </div>
            </section>


            <section className='slider-content'>
                <div className="swiper mySwiper">
                    <div className="swiper-wrapper">
                        <div className="swiper-slide">
                            <div className="container">
                                <div className="row align-items-center">
                                    <div className="col-lg-7  d-lg-block d-none">
                                        <div className="img-slider text-lg-end img1">
                                            <img src="frontend/images/slide1.png" alt="" />
                                        </div>
                                    </div>
                                    <div className="col-lg-5">
                                        <div className="content-slider">
                                            <span className='step'>Step 1</span>
                                            <h2>Fill your cart</h2>
                                            <div className="img-slider d-block d-lg-none">
                                                <img src="frontend/images/slide1.png" alt="" />
                                            </div>
                                            <p>Shop your favorite stores and then select Taro at checkout. Enter a few pieces of information for a real-time decision.</p>
                                            <Link to="#" className='btn btn-primary'>Subscribe</Link>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div className="swiper-slide">
                            <div className="container">
                                <div className="row align-items-center">
                                    <div className="col-lg-5 ">
                                        <div className="content-slider">
                                            <span className='step'>Step 2</span>
                                            <h2>Choose how you pay</h2>
                                            <div className="img-slider d-block d-lg-none">
                                                <img src="frontend/images/slide2.png" alt="" className="slide2" />
                                            </div>
                                            <p>Select the payment schedule that works for you, then confirm your loan. We'll never charge more than you see up front.</p>
                                            <Link to="#" className='btn btn-primary'>Subscribe</Link>
                                        </div>
                                    </div>
                                    <div className="col-lg-7  d-lg-block d-none">
                                        <div className="img-slider text-end">
                                            <img src="frontend/images/slide2.png" alt="" className="slide2 img2" />
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                        <div className="swiper-slide">
                            <div className="container">
                                <div className="row align-items-center">
                                    <div className="col-lg-7  d-lg-block d-none">
                                        <div className="img-slider text-lg-end">
                                            <img src="frontend/images/slide3.png" alt="" className="slide3 img3" />
                                        </div>
                                    </div>
                                    <div className="col-lg-5">
                                        <div className="content-slider">
                                            <span className='step'>Step 3</span>
                                            <h2>Make easy monthly payments</h2>
                                            <div className="img-slider d-block d-lg-none">
                                                <img src="frontend/images/slide3.png" alt="" className="slide3 " />
                                            </div>
                                            <p>Download the Taro app or sign in at taro.pk. We'll send you email and text reminders so you never miss a payment.</p>
                                            <Link to="#" className='btn btn-primary'>Subscribe</Link>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div className="swiper-pagination"></div>
                    <div className="slider-content"></div>

                </div>

            </section>


        </>

    )
}

export default Home;