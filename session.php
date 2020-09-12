<?php
include('config.php');
session_start();
echo session_id();
$user_check = isset($_SESSION['login_user']);

$ses_sql = mysqli_query($db,"select email from users where email = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(isset($_SESSION['login_user'])){
    header("location:login.php");
    die();
}
