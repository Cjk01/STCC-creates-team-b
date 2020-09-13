<?php
//Verify info here
include("auth/config.php");
include('assets/reqJSSA2.php');
if($_SERVER["REQUEST_METHOD"] == "POST") { 
//now to check if the entered values fit the proper format
$first = $_POST['fname'];
$last = $_POST['lname'];
$email = $_POST['Email'];
$pw = $_POST['password'];
function endsWith($string, $endString) 
{ 
    $len = strlen($endString); 
    if ($len == 0) { 
        return true; 
    } 
    return (substr($string, -$len) === $endString); 
} 
if(endsWith($email , 'student.stcc.edu') and strlen($first) != 0 and strlen($last ) != 0 and strlen($pw) > 6){
// when the 'create account' button is pressed, all the input values are inserted into the db if they are in the correct format
$insert = "INSERT INTO users (firstName, lastName, email, password, groups) VALUES ('$first', '$last', '$email', MD5('$pw'), '')";

if (mysqli_query($db, $insert)) {
    echo '<script type="text/javascript">',
    'window.onload = function() {
    SuccessAdd();
    }',
    '</script>';  } else {
    echo "Error: " . $insert . "<br>" . mysqli_error($db);
  }
}
else {
    echo '<script type="text/javascript">',
    'window.onload = function() {
    ErrorAdd();
    }',
    '</script>';
}

}

?>
<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-blue.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/js/customLinks.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<hgroup>
    <h1>STCC Social Media </h1>
</hgroup>
<form action="" method="post">
<div class="group">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="Email" name="fname">
            <label class="mdl-textfield__label" for="password">First Name</label>
        </div>
    </div>
    <div class="group">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="Email" name="lname">
            <label class="mdl-textfield__label" for="password">Last Name</label>
        </div>
    </div>
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
        Create Account
    </button>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"type="button" onclick="window.location.href='login.php'">
        Login
    </button>
</form>
<div class="group">

<footer>
    <img src="assets/images/Springfield_Technical_Community_College_(STCC)_seal.png" alt="STCC Logo">
    <p>Welcome to STCC Social Media login</p>
</footer>
