import React, { useState } from 'react';


function Footer() {
    const initialState = {email: ""};
    const url = '';
    const [data,setData] = useState(initialState);
    // const [formErrors,setformErrors] = useState({});
    // const [isSubmit,setisSubmit] = useState(false);


    const clearState = () => {
        setData({ ...initialState });
    };

    function changeHandler(e){
        const {name,value} = e.target;
        setData({...data,[name]:value});
    }

    function formValidator(values){
        const error = {};
        if(!values.email){
            error.email = 'email is required';
        }
        return error;
    }
    function submitForm(e){
        e.preventDefault();
        axios.post(url+'api/saveEmail',data).then(res=>{
            clearState();
            swal("Good job!", "You Email is Subscribed !", "success");
        })
    }

   return (
       <footer>
           <div className="container">
               <div className="row align-items-center">
                   <div className="col-lg-6">
                       <div className="text-content">
                           <img src="images/counter.svg" alt="" className='counter' />


                           <h2><span> Anywhere, Anytime:</span>
                               Pay in Four</h2>

                           <p>Split purchases into four equal payments over three months with <strong>Pakistan's first licensed</strong>  and Shariah compliant  <strong>BNPL provider </strong>  </p>
                           <div className="img-holder d-block d-lg-none">
                               <img src="frontend/images/shapeFooter.svg" alt="" />
                           </div>
                           <form action="" onSubmit={(e)=>{submitForm(e)}} className='subscription-form'>
                           <h4>Subscribe to get early access</h4>
                           <div className="inputGroup">
                               <div className="icon-prepend">
                                   <input type="text" required onChange={changeHandler} name="email" value={data.email}  autoComplete="off" className='form-control' placeholder='Your email address' />
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
           <img src="frontend/images/shapeFooter.svg" alt="" className='shapefooter' />
       </footer>
        )
    }




export default Footer;


