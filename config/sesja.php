<?php
session_start();
$config=require('config.php');
$conn = new mysqli($config->host,$config->username,$config->pass,$config->database);
?>