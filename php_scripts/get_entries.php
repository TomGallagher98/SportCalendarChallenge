<?php
require "database_connection.php";

function getEntries(){
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT c.Event_Date, c.Event_Time, c.Sport, t.Display_Name as Home, t2.Display_Name as Away
                            FROM calendar_entries c
                            LEFT JOIN Teams t ON c._HomeTeam = t.ID
                            LEFT JOIN Teams t2 ON c._AwayTeam = t2.ID
                            ORDER BY c.Event_Date ASC, c.Event_Time ASC;");
    while($row = $result->fetch_assoc()){
        $games[] = $row;
    }
    $mysqli -> close();
    return $games;
}