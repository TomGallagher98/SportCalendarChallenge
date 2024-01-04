<?php
require "database_connection.php";

function getSports(){
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT DISTINCT Sport from Calendar_Entries;");
    while($row = $result->fetch_assoc()){
        $sports[] = $row;
    }
    $mysqli -> close();
    return $sports;
}