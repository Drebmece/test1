<?php
    function connection(){
        $host = "localhost";
        $username = "root";
        $password = "hiroshi";
        $db = "student_system";

        $con = new mysqli($host,$username,$password,$db);

        if($con->connect_error){
            echo $con->connect_error;
        }else{
            return $con;
        }
    }
?>