<!DOCTYPE html>

<html lang="en">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Login</title>



  <?php include 'css_master.php';?>



  <style type="text/css">
  

    



/*[ FONT SIZE ]

///////////////////////////////////////////////////////////

*/











/*[ TEXT ]

///////////////////////////////////////////////////////////

*/

/* ------------------------------------ */













/*[ SHAPE ]

///////////////////////////////////////////////////////////

*/



/*[ Display ]

-----------------------------------------------------------

*/











/*[ Transition ]

-----------------------------------------------------------

*/

.trans-0-1 {

  -webkit-transition: all 0.1s;

    -o-transition: all 0.1s;

    -moz-transition: all 0.1s;

    transition: all 0.1s;

}

.trans-0-2 {

  -webkit-transition: all 0.2s;

    -o-transition: all 0.2s;

    -moz-transition: all 0.2s;

    transition: all 0.2s;

}

.trans-0-3 {

  -webkit-transition: all 0.3s;

    -o-transition: all 0.3s;

    -moz-transition: all 0.3s;

    transition: all 0.3s;

}

.trans-0-4 {

  -webkit-transition: all 0.4s;

    -o-transition: all 0.4s;

    -moz-transition: all 0.4s;

    transition: all 0.4s;

}

.trans-0-5 {

  -webkit-transition: all 0.5s;

    -o-transition: all 0.5s;

    -moz-transition: all 0.5s;

    transition: all 0.5s;

}

.trans-0-6 {

  -webkit-transition: all 0.6s;

    -o-transition: all 0.6s;

    -moz-transition: all 0.6s;

    transition: all 0.6s;

}

.trans-0-9 {

  -webkit-transition: all 0.9s;

    -o-transition: all 0.9s;

    -moz-transition: all 0.9s;

    transition: all 0.9s;

}

.trans-1-0 {

  -webkit-transition: all 1s;

    -o-transition: all 1s;

    -moz-transition: all 1s;

    transition: all 1s;

}







/*[ Layout ]

///////////////////////////////////////////////////////////

*/



/*[ Flex ]

-----------------------------------------------------------

*/

/* ------------------------------------ */

.flex-w {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-wrap: wrap;

  -moz-flex-wrap: wrap;

  -ms-flex-wrap: wrap;

  -o-flex-wrap: wrap;

  flex-wrap: wrap;

}



/* ------------------------------------ */

.flex-l {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: flex-start;

}



.flex-r {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: flex-end;

}



.flex-c {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: center;

}



.flex-sa {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: space-around;

}



.flex-sb {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: space-between;

}



/* ------------------------------------ */

.flex-t {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -ms-align-items: flex-start;

  align-items: flex-start;

}



.flex-b {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -ms-align-items: flex-end;

  align-items: flex-end;

}



.flex-m {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -ms-align-items: center;

  align-items: center;

}



.flex-str {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -ms-align-items: stretch;

  align-items: stretch;

}



/* ------------------------------------ */

.flex-row {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: row;

  -moz-flex-direction: row;

  -ms-flex-direction: row;

  -o-flex-direction: row;

  flex-direction: row;

}



.flex-row-rev {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: row-reverse;

  -moz-flex-direction: row-reverse;

  -ms-flex-direction: row-reverse;

  -o-flex-direction: row-reverse;

  flex-direction: row-reverse;

}



.flex-col {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column;

  -moz-flex-direction: column;

  -ms-flex-direction: column;

  -o-flex-direction: column;

  flex-direction: column;

}



.flex-col-rev {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column-reverse;

  -moz-flex-direction: column-reverse;

  -ms-flex-direction: column-reverse;

  -o-flex-direction: column-reverse;

  flex-direction: column-reverse;

}



/* ------------------------------------ */

.flex-c-m {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: center;

  -ms-align-items: center;

  align-items: center;

}



.flex-c-t {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: center;

  -ms-align-items: flex-start;

  align-items: flex-start;

}



.flex-c-b {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: center;

  -ms-align-items: flex-end;

  align-items: flex-end;

}



.flex-c-str {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: center;

  -ms-align-items: stretch;

  align-items: stretch;

}



.flex-l-m {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: flex-start;

  -ms-align-items: center;

  align-items: center;

}



.flex-r-m {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: flex-end;

  -ms-align-items: center;

  align-items: center;

}



.flex-sa-m {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: space-around;

  -ms-align-items: center;

  align-items: center;

}



.flex-sb-m {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: space-between;

  -ms-align-items: center;

  align-items: center;

}



/* ------------------------------------ */

.flex-col-l {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column;

  -moz-flex-direction: column;

  -ms-flex-direction: column;

  -o-flex-direction: column;

  flex-direction: column;

  -ms-align-items: flex-start;

  align-items: flex-start;

}



.flex-col-r {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column;

  -moz-flex-direction: column;

  -ms-flex-direction: column;

  -o-flex-direction: column;

  flex-direction: column;

  -ms-align-items: flex-end;

  align-items: flex-end;

}



.flex-col-c {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column;

  -moz-flex-direction: column;

  -ms-flex-direction: column;

  -o-flex-direction: column;

  flex-direction: column;

  -ms-align-items: center;

  align-items: center;

}



.flex-col-l-m {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column;

  -moz-flex-direction: column;

  -ms-flex-direction: column;

  -o-flex-direction: column;

  flex-direction: column;

  -ms-align-items: flex-start;

  align-items: flex-start;

  justify-content: center;

}



.flex-col-r-m {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column;

  -moz-flex-direction: column;

  -ms-flex-direction: column;

  -o-flex-direction: column;

  flex-direction: column;

  -ms-align-items: flex-end;

  align-items: flex-end;

  justify-content: center;

}



.flex-col-c-m {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column;

  -moz-flex-direction: column;

  -ms-flex-direction: column;

  -o-flex-direction: column;

  flex-direction: column;

  -ms-align-items: center;

  align-items: center;

  justify-content: center;

}



.flex-col-str {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column;

  -moz-flex-direction: column;

  -ms-flex-direction: column;

  -o-flex-direction: column;

  flex-direction: column;

  -ms-align-items: stretch;

  align-items: stretch;

}



.flex-col-sb {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column;

  -moz-flex-direction: column;

  -ms-flex-direction: column;

  -o-flex-direction: column;

  flex-direction: column;

  justify-content: space-between;

}



/* ------------------------------------ */

.flex-col-rev-l {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column-reverse;

  -moz-flex-direction: column-reverse;

  -ms-flex-direction: column-reverse;

  -o-flex-direction: column-reverse;

  flex-direction: column-reverse;

  -ms-align-items: flex-start;

  align-items: flex-start;

}



.flex-col-rev-r {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column-reverse;

  -moz-flex-direction: column-reverse;

  -ms-flex-direction: column-reverse;

  -o-flex-direction: column-reverse;

  flex-direction: column-reverse;

  -ms-align-items: flex-end;

  align-items: flex-end;

}



.flex-col-rev-c {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column-reverse;

  -moz-flex-direction: column-reverse;

  -ms-flex-direction: column-reverse;

  -o-flex-direction: column-reverse;

  flex-direction: column-reverse;

  -ms-align-items: center;

  align-items: center;

}



.flex-col-rev-str {

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  -webkit-flex-direction: column-reverse;

  -moz-flex-direction: column-reverse;

  -ms-flex-direction: column-reverse;

  -o-flex-direction: column-reverse;

  flex-direction: column-reverse;

  -ms-align-items: stretch;

  align-items: stretch;

}





/*[ Absolute ]

-----------------------------------------------------------

*/

.ab-c-m {

  position: absolute;

  top: 50%;

  left: 50%;

  -webkit-transform: translate(-50%, -50%);

    -moz-transform: translate(-50%, -50%);

    -ms-transform: translate(-50%, -50%);

    -o-transform: translate(-50%, -50%);

  transform: translate(-50%, -50%);

}



.ab-c-t {

  position: absolute;

  top: 0px;

  left: 50%;

  -webkit-transform: translateX(-50%);

    -moz-transform: translateX(-50%);

    -ms-transform: translateX(-50%);

    -o-transform: translateX(-50%);

  transform: translateX(-50%);

}



.ab-c-b {

  position: absolute;

  bottom: 0px;

  left: 50%;

  -webkit-transform: translateX(-50%);

    -moz-transform: translateX(-50%);

    -ms-transform: translateX(-50%);

    -o-transform: translateX(-50%);

  transform: translateX(-50%);

}



.ab-l-m {

  position: absolute;

  left: 0px;

  top: 50%;

  -webkit-transform: translateY(-50%);

    -moz-transform: translateY(-50%);

    -ms-transform: translateY(-50%);

    -o-transform: translateY(-50%);

  transform: translateY(-50%);

}



.ab-r-m {

  position: absolute;

  right: 0px;

  top: 50%;

  -webkit-transform: translateY(-50%);

    -moz-transform: translateY(-50%);

    -ms-transform: translateY(-50%);

    -o-transform: translateY(-50%);

  transform: translateY(-50%);

}



.ab-t-l {

  position: absolute;

  left: 0px;

  top: 0px;

}



.ab-t-r {

  position: absolute;

  right: 0px;

  top: 0px;

}



.ab-b-l {

  position: absolute;

  left: 0px;

  bottom: 0px;

}



.ab-b-r {

  position: absolute;

  right: 0px;

  bottom: 0px;

}

























/*//////////////////////////////////////////////////////////////////

[ FONT ]*/







* {

  margin: 0px; 

  padding: 0px; 

  box-sizing: border-box;

}



/*body, html {

  height: 100%;

  font-family: Poppins-Regular, sans-serif;

}*/



/*---------------------------------------------*/

a {

  font-family: Poppins-Regular;

  font-size: 14px;

  line-height: 1.7;

  /*color: #666666;*/

  margin: 0px;

  transition: all 0.4s;

  -webkit-transition: all 0.4s;

  -o-transition: all 0.4s;

  -moz-transition: all 0.4s;

}



a:focus {

  outline: none !important;

}



a:hover {

  text-decoration: none;

  color: #57b846;

}



/*---------------------------------------------*/

h1,h2,h3,h4,h5,h6 {

  margin: 0px;

}



p {

  font-family: Poppins-Regular;

  font-size: 14px;

  line-height: 1.7;

  /*color: #666666;*/

  margin: 0px;

}



ul, li {

  margin: 0px;

  list-style-type: none;

}





/*---------------------------------------------*/

input {

  outline: none;

  border: none;

}



textarea {

  outline: none;

  border: none;

}



textarea:focus, input:focus {

  border-color: transparent !important;

}



input:focus::-webkit-input-placeholder { color:transparent; }

input:focus:-moz-placeholder { color:transparent; }

input:focus::-moz-placeholder { color:transparent; }

input:focus:-ms-input-placeholder { color:transparent; }



textarea:focus::-webkit-input-placeholder { color:transparent; }

textarea:focus:-moz-placeholder { color:transparent; }

textarea:focus::-moz-placeholder { color:transparent; }

textarea:focus:-ms-input-placeholder { color:transparent; }



input::-webkit-input-placeholder { color: #999999; }

input:-moz-placeholder { color: #999999; }

input::-moz-placeholder { color: #999999; }

input:-ms-input-placeholder { color: #999999; }



textarea::-webkit-input-placeholder { color: #999999; }

textarea:-moz-placeholder { color: #999999; }

textarea::-moz-placeholder { color: #999999; }

textarea:-ms-input-placeholder { color: #999999; }



/*---------------------------------------------*/

button {

  outline: none !important;

  border: none;

  background: transparent;

}



button:hover {

  cursor: pointer;

}



iframe {

  border: none !important;

}





/*//////////////////////////////////////////////////////////////////

[ Utility ]*/

.txt1 {

  font-family: Poppins-Regular;

  font-size: 13px;

  line-height: 1.5;

  color: #999999;

}



.txt2 {

  font-family: Poppins-Regular;

  font-size: 13px;

  line-height: 1.5;

  color: #666666;

}





/*//////////////////////////////////////////////////////////////////

[ login ]*/



.limiter {

  width: 100%;

  margin: 0 auto;

}



/*.container-login100 {

  width: 100%;  

  min-height: 100vh;

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  flex-wrap: wrap;

  justify-content: center;

  align-items: center;

  padding: 15px;

  background: #9053c7;

  background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);

  background: -o-linear-gradient(-135deg, #c850c0, #4158d0);

  background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);

  background: linear-gradient(-135deg, #c850c0, #4158d0);

}*/



.wrap-login100 {

  /*width: 960px;*/

  margin-top: -20%;

  margin-left: 7%;

  /*background: #fff;*/

  border-radius: 10px;

  overflow: hidden;



  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  flex-wrap: wrap;

  justify-content: space-between;

  padding: 177px 130px 33px 95px;

}



/*------------------------------------------------------------------

[  ]*/

.login100-pic {

  width: 316px;

}



.login100-pic img {

  max-width: 100%;

}





/*------------------------------------------------------------------

[  ]*/

.login100-form {

  width: 290px;

}



/*.login100-form-title {

  font-family: Poppins-Bold;

  font-size: 24px;

  color: #333333;

  line-height: 1.2;

  text-align: center;



  width: 100%;

  display: block;

  padding-bottom: 54px;

}*/





/*---------------------------------------------*/

.wrap-input100 {

  position: relative;

  width: 100%;

  z-index: 1;

  margin-bottom: 10px;

}



.input100 {

  font-family: Poppins-Medium;

  font-size: 15px;

  line-height: 1.5;

  color: #666666;



  display: block;

  width: 100%;

  background: #e6e6e6;

  height: 50px;

  border-radius: 25px;

  padding: 0 30px 0 68px;

}





/*------------------------------------------------------------------

[ Focus ]*/

.focus-input100 {

  display: block;

  position: absolute;

  border-radius: 25px;

  bottom: 0;

  left: 0;

  z-index: -1;

  width: 100%;

  height: 100%;

  box-shadow: 0px 0px 0px 0px;

  color: rgba(87,184,70, 0.8);

}



.input100:focus + .focus-input100 {

  -webkit-animation: anim-shadow 0.5s ease-in-out forwards;

  animation: anim-shadow 0.5s ease-in-out forwards;

}



@-webkit-keyframes anim-shadow {

  to {

    box-shadow: 0px 0px 70px 25px;

    opacity: 0;

  }

}



@keyframes anim-shadow {

  to {

    box-shadow: 0px 0px 70px 25px;

    opacity: 0;

  }

}



.symbol-input100 {

  font-size: 15px;



  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  align-items: center;

  position: absolute;

  border-radius: 25px;

  bottom: 0;

  left: 0;

  width: 100%;

  height: 100%;

  padding-left: 35px;

  pointer-events: none;

  color: #666666;



  -webkit-transition: all 0.4s;

  -o-transition: all 0.4s;

  -moz-transition: all 0.4s;

  transition: all 0.4s;

}



.input100:focus + .focus-input100 + .symbol-input100 {

  color: #57b846;

  padding-left: 28px;

}



/*------------------------------------------------------------------

[ Button ]*/

.container-login100-form-btn {

  width: 100%;

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  flex-wrap: wrap;

  justify-content: center;

  padding-top: 20px;

}



.login100-form-btn {

  font-family: Montserrat-Bold;

  font-size: 15px;

  line-height: 1.5;

  color: #fff;

  text-transform: uppercase;



  width: 100%;

  height: 50px;

  border-radius: 25px;

  background: #57b846;

  display: -webkit-box;

  display: -webkit-flex;

  display: -moz-box;

  display: -ms-flexbox;

  display: flex;

  justify-content: center;

  align-items: center;

  padding: 0 25px;



  -webkit-transition: all 0.4s;

  -o-transition: all 0.4s;

  -moz-transition: all 0.4s;

  transition: all 0.4s;

}



.login100-form-btn:hover {

  background: #333333;

}







/*------------------------------------------------------------------

[ Responsive ]*/







@media (max-width: 992px) {

  .wrap-login100 {

    padding: 177px 90px 33px 85px;

  }



  .login100-pic {

    width: 35%;

  }



  .login100-form {

    width: 50%;

  }

}



@media (max-width: 768px) {

  .wrap-login100 {

    padding: 100px 80px 33px 80px;

  }



  .login100-pic {

    display: none;

  }



  .login100-form {

    width: 100%;

  }

}



@media (max-width: 576px) {

  .wrap-login100 {

    padding: 100px 15px 33px 15px;

  }

}





/*------------------------------------------------------------------

[ Alert validate ]*/



.validate-input {

  position: relative;

}



.alert-validate::before {

  content: attr(data-validate);

  position: absolute;

  max-width: 70%;

  background-color: white;

  border: 1px solid #c80000;

  border-radius: 13px;

  padding: 4px 25px 4px 10px;

  top: 50%;

  -webkit-transform: translateY(-50%);

  -moz-transform: translateY(-50%);

  -ms-transform: translateY(-50%);

  -o-transform: translateY(-50%);

  transform: translateY(-50%);

  right: 8px;

  pointer-events: none;



  font-family: Poppins-Medium;

  color: #c80000;

  font-size: 13px;

  line-height: 1.4;

  text-align: left;



  visibility: hidden;

  opacity: 0;



  -webkit-transition: opacity 0.4s;

  -o-transition: opacity 0.4s;

  -moz-transition: opacity 0.4s;

  transition: opacity 0.4s;

}



.alert-validate::after {

  content: "\f06a";

  font-family: FontAwesome;

  display: block;

  position: absolute;

  color: #c80000;

  font-size: 15px;

  top: 50%;

  -webkit-transform: translateY(-50%);

  -moz-transform: translateY(-50%);

  -ms-transform: translateY(-50%);

  -o-transform: translateY(-50%);

  transform: translateY(-50%);

  right: 13px;

}



.alert-validate:hover:before {

  visibility: visible;

  opacity: 1;

}



@media (max-width: 992px) {

  .alert-validate::before {

    visibility: visible;

    opacity: 1;

  }

}

  </style>





</head>



<body id="login_body" style="width: 100% !important;margin-left: 0% !important; background-image: url('') !important;background-color:#f8f9fa !important; box-shadow: none !important;">



<?php include 'header.php';?>







<div class="container col-sm-5" style="text-align: center;margin-top: 5%">

  <div class="card">

    <div class="card-header" style="font-size: 14px; font-weight: bold; background-color: #2e8239; color: white">

      Admin Login Panel

    </div>

    <div class="card-body">

      

      <?php if(isset($_GET['msg'])){ ?>

          <div class="card" style="margin-top: 5px;">

          <div class="card-body" style="background-color: #e0aeb5; height: 30px;">

          <p style="margin-top: -10px; text-align: center; color: black">

            <?php 

          

              echo $_GET['msg'];

            //echo "The username or password is incorrect!";

          

          ?>

            

            </p>

          </div>

        </div>



      <?php } ?>



      <div class="limiter">



    <div class="container-login100">



      <div class="wrap-login100">





        



        <form class="login100-form validate-form" action="../user_login.php" method="post">

          

          





      <?php //if(isset($_GET['msg_pass'])){ ?>

          <!-- <div class="card" style="margin-top: 5px;">

          <div class="card-body" style="background-color: #DFF0D8; height: 30px;">

          <p style="margin-top: -10px; text-align: center; color: black"> -->

            <?php 

          

              //echo $_GET['msg_pass'];

            //echo "The username or password is incorrect!";

          

          ?>

            

            <!-- </p>

          </div>

        </div> -->



      <?php //} ?>



          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

            <input class="input100" type="text" name="username" placeholder="Username" required>

            <span class="focus-input100"></span>

            <span class="symbol-input100">

              <i class="fa fa-envelope" aria-hidden="true"></i>

            </span>

          </div>



          <div class="wrap-input100 validate-input" data-validate = "Password is required">

            <input class="input100" type="password" name="password" placeholder="Password" required>

            <span class="focus-input100"></span>

            <span class="symbol-input100">

              <i class="fa fa-lock" aria-hidden="true"></i>

            </span>

          </div>



          <div class="container-login100-form-btn">

            <button class="login100-form-btn" name="login_btn">

              Login

            </button>

          </div>



          <div class="text-center p-t-12">

            <span class="txt1">

              Forgot

            </span>

            <a class="txt2" href="#">

              Username / Password?

            </a>

          </div>



          <div class="text-center p-t-136">

            <a class="txt2" href="#">

              Create your Account

              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>

            </a>

          </div>

        </form>

      </div>

    </div>

  </div>

    </div>

  </div>

</div>



  



  <!-- /#wrapper -->



  





  <!-- <script type="text/javascript">

    $(document).ready(function(){



      $("#personal_info").on('click',function(){



        $("#personal_info").removeAttr('style').css({border: "1px solid gray", border-radius: "0px", padding: "40px"});

        $(this).css({border: "2px solid green", border-radius: "0px", padding: "40px"});

      });

    });

  </script> -->





  <?php //include '../footer.php';?>



  <?php include '../js_master.php';?>







</body>



</html>

