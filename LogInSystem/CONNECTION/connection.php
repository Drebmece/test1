<?php
    function connection(){
        $host = "localhost";
        $user = "root";
        $pw = "hiroshi";
        $db = "test";

        $con = new mysqli($host,$user,$pw,$db);

        if($con->connect_error){
            $con->connect_error;
        }else{
            return $con;
        }
    }
?>