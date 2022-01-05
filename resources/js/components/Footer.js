import React, { useState } from 'react';


function Footer() {
    const initialState = { email: "" };
    const url = '';
    const [data, setData] = useState(initialState);
    // const [formErrors,setformErrors] = useState({});
    // const [isSubmit,setisSubmit] = useState(false);


    const clearState = () => {
        setData({ ...initialState });
    };

    function changeHandler(e) {
        const { name, value } = e.target;
        setData({ ...data, [name]: value });
    }

    function formValidator(values) {
        const error = {};
        if (!values.email) {
            error.email = 'email is required';
        }
        return error;
    }
    function submitForm(e) {
        e.preventDefault();
        axios.post(url + 'api/saveEmail', data).then(res => {
            clearState();
            swal("Good job!", "You Email is Subscribed !", "success");
        })
    }

    return (
        <>
            <footer className='site-footer'>
                <div className='container-fluid container-taro'>
                    <div className='sf-content'>
                        <img src="frontend/images/counters-white.svg" alt="" />
                        <h2><span className='d-none d-sm-inline-block'>Anywhere, Anytime:</span> Pay in Four</h2>
                        <p>Split purchases into four equal payments over three months with <span className='text-white'>Pakistan's first licensed</span> and Shariah compliant <span className='text-white'>BNPL provider</span></p>
                        <div className="sf-img">
                            <picture>
                                <source media="(min-width:992px)" srcset="frontend/images/footer-img.svg" />
                                <source media="(min-width:576px)" srcset="frontend/images/footer-img-tablet.svg" />
                                <img src="frontend/images/footer-img-mobile.svg" alt="" />
                            </picture>
                        </div>
                        <div className='subscribe-widget'>
                            <h6>Subscribe to get early access</h6>
                            <form action="" onSubmit={(e) => { submitForm(e) }}>
                                <div className='subscribe-widget-form'>
                                    <div className='form-group input-field-wrap'>
                                        <img src="frontend/images/envelope.svg" alt="" className='icon-envelope' />
                                        <input type="email" required onChange={changeHandler} name="email" value={data.email} autoComplete="off" className='form-control' placeholder='Your email address' />
                                    </div>
                                    <div className='form-group'>
                                        <button type="submit" className='btn btn-light'>Subscribe</button>
                                    </div>
                                </div>
                            </form>
                            <p>No spam, notifications only about new products and updates. You can always unsubscribe.</p>                                
                        </div>
                    </div>
                    <div className='sf-copyrights'>
                        <img src="frontend/images/logo-white.svg" alt="" />
                        <p>&copy; {(new Date().getFullYear())} Taro. All rights reserved</p>
                    </div>
                    <img src="frontend/images/footer-circles.svg" alt="" className='circles-shape' />
                </div>
            </footer>
        {/* <footer>
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-6">
                        <div className="text-content">
                            <img src="frontend/images/counter.svg" alt="" className='counter' />


                            <h2><span> Anywhere, Anytime:</span>
                                Pay in Four</h2>

                            <p>Split purchases into four equal payments over three months with <strong>Pakistan's first licensed</strong>  and Shariah compliant  <strong>BNPL provider </strong>  </p>
                            <div className="img-holder d-block d-lg-none">
                                <img src="frontend/images/imgFooter.png" alt="" />
                            </div>
                            <form action="" onSubmit={(e) => { submitForm(e) }} className='subscription-form'>
                                <h4>Subscribe to get early access</h4>
                                <div className="inputGroup">
                                    <div className="icon-prepend">
                                        <input type="text" required onChange={changeHandler} name="email" value={data.email} autoComplete="off" className='form-control' placeholder='Your email address' />
                                        <i><img src="frontend/images/envelope.svg" alt="" /></i>
                                    </div>
                                    <button type="submit" className='btn btn-light'>Subscribe</button>
                                </div>
                                <p className="note">No spam, notifications only about new products and updates. <br /> You can always unsubscribe.</p>
                            </form>
                        </div>
                    </div>
                    <div className="col-lg-6 d-lg-block d-none">
                        <div className="img-holder">
                            <img src="frontend/images/imgFooter.png" alt="" />
                        </div>
                    </div>
                </div>
                <div className="footer-text">
                    <img src="frontend/images/logoWhite.svg" alt="" />
                    <p>© 2021 Taro. All rights reserved</p>
                </div>
            </div>
            <img src="frontend/images/shapeFooter.svg" alt="" className='shapefooter d-none d-xl-block' />
        </footer> */}

        {/* // <footer>
        //     <div className="container">
        //         <div className="row align-items-center">
        //             <div className="col-lg-6">
        //                 <div className="text-content">
        //                     <img src="frontend/images/counter.svg" alt="" className='counter' />


        //                     <h2><span> Anywhere, Anytime:</span>
        //                         Pay in Four</h2>

        //                     <p>Split purchases into four equal payments over three months with <strong>Pakistan’s first licensed</strong>  and Shariah compliant  <strong>BNPL provider </strong>  </p>
        //                     <div className="img-holder d-block d-lg-none">
        //                         <img src="frontend/images/imgFooter.png" alt="" />
        //                     </div>  <form action="" className='subscription-form'>
        //                         <h4>Subscribe to get early access</h4>
        //                         <div className="inputGroup">
        //                             <div className="icon-prepend">
        //                                 <input type="text" className='form-control' placeholder='Your email address' />
        //                                 <i><img src={iconEnvelope} alt="" /></i>
        //                             </div>
        //                             <button className='btn btn-light'>Subscribe</button>
        //                         </div>
        //                         <p className="note">No spam, notifications only about new products and updates. <br /> You can always unsubscribe.</p>
        //                     </form>
        //                 </div>
        //             </div>
        //             <div className="col-lg-6 d-lg-block d-none">
        //                 <div className="img-holder">
        //                     <img src="frontend/images/imgFooter.png" alt="" />
        //                 </div>
        //             </div>
        //         </div>
        //         <div className="footer-text">
        //             <img src={LogoWhite} alt="" />
        //             <p>© 2021 Taro. All rights reserved</p>
        //         </div>
        //     </div>
        //     <img src="frontend/images/shapeFooter.svg" alt="" className='shapefooter' />
        // </footer> */}
        </>
    )
}




export default Footer;


