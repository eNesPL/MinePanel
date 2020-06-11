<?php
include($_SERVER['DOCUMENT_ROOT']."/config/sesja.php");
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
