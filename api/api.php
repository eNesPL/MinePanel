<?php
include './config/sesja.php';
function getOnline(){
    $sql='select username from authme.authme where isLogged = 1';
    if (isset($conn)) {
        $result = mysqli_query($conn, $sql);
        return mysqli_fetch_array($result);
    }
}
echo getOnline();
?>
<html>


</html>
