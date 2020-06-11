<?php
session_start();
$config=require('config.php');
global $conn;
$conn = new mysqli($config->host,$config->username,$config->pass,$config->database);
?>