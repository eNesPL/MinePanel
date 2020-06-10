<?php

class Api
{
    private $host='localhost';
    private $user='authme';
    private $pass='authme';
    private $database='authme';
    protected $connLink;
    protected function connect(){

        // establish connection
        if(!$this->connLink = mysqli_connect($this->host, $this->user, $this->pass,$this->database)) {
            throw new Exception('Error connecting to MySQL: '.mysqli_error());
        }
    }
    function check_password($user,$pass){
        try {
            $this->connect();
        } catch (Exception $e) {
        }

        $pass=hash('sha256',$pass);
        $sql= 'select password from authme where username = "' . $user . '"';
        $result = mysqli_query($this->connLink,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $hash = $row['password'];
        echo $hash;
        echo "<Br>";
        echo $pass;
        if(password_verify ( $pass, $hash )){
            return(true);
        }else{
            return(false);
        }

    }
}