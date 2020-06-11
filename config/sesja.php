<?php
session_start();

    $config=require('config.php');
    global $conn;
    $conn = new mysqli($config->host, $config->username, $config->pass);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getOnline($conn){

    $sql='select realname from authme.authme where isLogged = 1';

    $result = mysqli_query($conn, $sql);
    return $result;
}
function getLastLogin($nick,$conn){

    $sql='select lastlogin from authme.authme where username = "'.$nick.'"';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $wynik = date('d/m/Y H:i',substr($row["lastlogin"],0,10));
    return $wynik;
}


function getName(){
    return $_SESSION['login'];
}

function getHP($nick,$conn)
{
    $sql = 'select health from items.mpdb_health_food_air where player_name = "' . $nick . '"';

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    return $row['health'];
}
getHP("enes",$conn);
function getFood($nick,$conn){
        $sql='select food from items.mpdb_health_food_air where player_name = "'.$nick.'"';
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        return $row['food'];
}
function getXP($nick,$conn){
    $sql='select exp_lvl from items.mpdb_experience where player_name = "'.$nick.'"';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    return $row['exp_lvl'];
}
?>