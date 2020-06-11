<?php include("./config/sesja.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AuthMe Integration Sample</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
error_reporting(E_ALL);

require 'AuthMeController.php';
require 'Sha256.php';
$authme_controller = new Sha256();

$action = get_from_post_or_empty('action');
$user = get_from_post_or_empty('username');
$pass = get_from_post_or_empty('password');
$email = get_from_post_or_empty('email');
$was_successful = false;
if ($action && $user && $pass) {
    if ($action === 'Zaloguj') {
        $was_successful = process_login($user, $pass, $authme_controller);
    }
}
if($action === "Wyloguj"){
    session_unset();
    session_destroy();
}


if (!$was_successful) {
    $_SESSION['error'] = 'Logowanie nie udane';
    $_SESSION['loged']=0;
    $_SESSION['login']="";
    session_unset();
    session_destroy();

}
//header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
function get_from_post_or_empty($index_name) {
    return trim(
        filter_input(INPUT_POST, $index_name, FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR | FILTER_FLAG_STRIP_LOW)
            ?: '');
}


// Login logic
function process_login($user, $pass, AuthMeController $controller) {
    if ($controller->checkPassword($user, $pass)) {
        $config=require('config.php');
        $sql='select realname from authme.authme where username = '.$user;

        $conn = new mysqli($config->host, $config->username, $config->pass, $config->database);
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        $_SESSION['login']=$row['realname'];
        $_SESSION['loged']=1;
        return true;
    } else {
        $_SESSION['error'] = 'Logowanie nie udane';
    }
    return false;
}

// Register logic
function process_register($user, $pass, $email, AuthMeController $controller) {
    if ($controller->isUserRegistered($user)) {
        echo '<h1>Error</h1> This user already exists.';
    } else if (!is_email_valid($email)) {
        echo '<h1>Error</h1> The supplied email is invalid.';
    } else {
        // Note that we don't validate the password or username at all in this demo...
        $register_success = $controller->register($user, $pass, $email);
        if ($register_success) {
            printf('<h1>Welcome, %s!</h1>Thanks for registering', htmlspecialchars($user));
            echo '<br /><a href="index2.php">Back to form</a>';
            return true;
        } else {
            echo '<h1>Error</h1>Unfortunately, there was an error during the registration.';
        }
    }
    return false;
}

function is_email_valid($email) {
    return trim($email) === ''
        ? true // accept no email
        : filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>