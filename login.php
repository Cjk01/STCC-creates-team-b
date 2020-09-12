<?php
//Verify info here
?>
<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/js/customLinks.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    <title>Login</title>
</head>
<hgroup>
    <h1>STCC Social Media </h1>
</hgroup>
<form>
    <div class="group">
        <input type="text" id="uEmail"><span class="highlight"></span><span class="bar"></span>
        <label>Email</label>
    </div>
    <div class="group">
        <input type="password" id="uPass"><span class="highlight"></span><span class="bar"></span>
        <label>Password</label>
    </div>
    <button type="button" class="button buttonBlue" onclick="userLogin()">Login
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
    <button type="button" class="button buttonBlue" id="signup" onclick="userRegister();">Sign up
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
</form>
<footer>
    <img src="assets/images/Springfield_Technical_Community_College_(STCC)_seal.png" alt="STCC Logo">
    <p>Welcome to STCC Social Media login</p>
</footer>