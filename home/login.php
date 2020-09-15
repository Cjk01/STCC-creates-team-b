<?php
include("../auth/config.php");
include('assets/phpFiles/MDSW_CSS_JS.php');
include('assets/phpFiles/reqJSSA2.php');

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['Email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT email FROM users WHERE email = '$myusername' and password = MD5('$mypassword')";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        session_start();
        $_SESSION['username'] = $myusername;
        header("location: maincontent.php");
    } else {
        echo '<script type="text/javascript">',
        'window.onload = function() {
        ErrorLogin();
        }',
        '</script>';
    }
}
?>
<!DOCTYPE HTML>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">

<head>
    <title>Login</title>
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
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="button"
            onclick="userRegister()">
        Sign up
    </button>
</form>
<footer>
    <img src="assets/img/Springfield_Technical_Community_College_(STCC)_seal.png" alt="STCC Logo">
    <p>Welcome to STCC Social Media login</p>
</footer>