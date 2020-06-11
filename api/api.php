<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../config/sesja.php");
$user = posix_getpwuid(posix_geteuid());
var_dump($user);
function getOnline($conn){

    $sql='select username from authme.authme where isLogged = 1';

        $result = mysqli_query($conn, $sql);
        echo $result;
        return mysqli_fetch_array($result);
}
$arr = getOnline($conn);
foreach($arr as $nick){
    echo $nick['username'];
}
?>
<html>


</html>
