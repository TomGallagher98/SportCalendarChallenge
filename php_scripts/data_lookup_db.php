<?php
require "database_connection.php";

function getDataSet($selection){
    if (strcmp($selection,"") == 0) {
        $selection = 'Teams';
    }
    
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT * FROM $selection;");
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $mysqli -> close();
    return $data;
}