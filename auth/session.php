<?php
include('config.php');
session_start();
$user_check = $_SESSION['username'];

$ses_sql = mysqli_query($db,"select email from users where email = '$user_check' LIMIT 1 ");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['email'];

