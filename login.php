<?php
include("auth/config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['Email']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT email FROM users WHERE email = '$myusername' and password = MD5('$mypassword')";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    session_id($_SESSION['Email']);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if(!isset($_SESSION['uname'])){
        session_start();
        $_SESSION["username"] = $myusername;
        echo $_SESSION["username"];
        header('Location: home/');

    }
}
?>
<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-blue.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/js/customLinks.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    <title>Login</title>
</head>
<hgroup>
    <h1>STCC Social Media </h1>
</hgroup>
<form action="" method="post">
    <div class="group">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="Email" name="Email">
            <label class="mdl-textfield__label" for="Email">Email</label>
        </div>
    </div>
    <div class="group">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="password" name="password">
            <label class="mdl-textfield__label" for="password">Password</label>
        </div>
    </div>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
        Login
    </button>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="button" onclick="userRegister()">
        Sign up
    </button>
</form>
<footer>
    <img src="assets/images/Springfield_Technical_Community_College_(STCC)_seal.png" alt="STCC Logo">
    <p>Welcome to STCC Social Media login</p>
</footer>