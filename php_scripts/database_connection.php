<?php
    require "config.php";


    if (!function_exists('dbConnect'))    {
        function dbConnect(){
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        if ($mysqli->connect_errno != 0) {
            return FALSE; 
        }else{
            return $mysqli;
        }
    }
}