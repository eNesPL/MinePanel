<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../config/sesja.php");

function getOnline($conn){

    $sql='select username from authme.authme where isLogged = 1';

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        return $row;
}
$arr = getOnline($conn);
foreach($arr as $nick){
    echo $nick;
}
?>
<html>


</html>
