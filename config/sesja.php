<?php
session_start();

    $config=require('config.php');
    global $conn;
    $conn = new mysqli($config->host, $config->username, $config->pass, $config->database);


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../config/sesja.php");

function getOnline($conn){

    $sql='select username from authme.authme where isLogged = 1';

    $result = mysqli_query($conn, $sql);
    return $result;
}

?>