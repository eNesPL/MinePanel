<?php
$conn = mysqli_connect('ftp.e-nes.pl','items','items','items');
$sql = 'select inventory from mpdb_inventory where player_name = "eNes"';
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

    $string = base64_decode($row[0]);
    echo $string;
    $txt[]=explode("",$string);
    foreach($txt as $var){
        echo $var. '<Br>';
}

