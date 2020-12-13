<?php
    function connection(){
        $host = "us-cdbr-east-02.cleardb.com";
        $username = "bfea0d2ee66816";
        $password = "989ceaff";
        $database = "heroku_0c4cc67b9804a71";

        $con = new mysqli($host,$username,$password,$database);

        if($con->connect_error){
            echo $con->connect_error;
        }else{
            return $con;
        }
    }
?>