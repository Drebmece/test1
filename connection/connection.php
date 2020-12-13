<?php
    function connection(){
        $host = "us-cdbr-east-02.cleardb.com";
        $username = "bccec691b4c698";
        $password = "94a56852";
        $database = "heroku_c3c4fd7f31b1e32";

        $con = new mysqli($host,$username,$password,$database);

        if($con->connect_error){
            echo $con->connect_error;
        }else{
            return $con;
        }
    }
?>