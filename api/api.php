<?php
require './config/sesja.php';
function getOnline(){
    $sql="select username from authme where isLogged==1";
    if (isset($conn)) {
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_row($result)) {
            echo $row['username'];
        }
}}
getOnline();