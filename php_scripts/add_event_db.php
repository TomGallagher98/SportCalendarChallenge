<?php
// require "database_connection.php";

    if (!defined('SERVER')) define('SERVER', "localhost");
    if (!defined('USERNAME')) define('USERNAME', "root");
    if (!defined('PASSWORD')) define("PASSWORD", "");
    if (!defined('DATABASE')) define("DATABASE", 'sportradarcalendarchallenge');
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    

    $event_date =  $_REQUEST['date'];
    $event_time = $_REQUEST['time'];
    $sport =  $_REQUEST['sport'];
    $home_team = $_REQUEST['home_team'];
    $away_team = $_REQUEST['away_team'];
    $stadium = $_REQUEST['venue'];
    settype($home_team, "integer");
    settype($away_team, "integer");
    settype($stadium, "integer");
    // $mysqli -> dbConnect();
    $sql = "INSERT INTO calendar_entries VALUES
    (0, '$sport', $home_team, $away_team, '$event_date', '$event_time', $stadium )";

    if ($mysqli -> query($sql) == TRUE) {
        echo "Successfully Added Event";
    } else {
        echo "Error:" . $sql . "<br>" . $mysqli->error;
    }

    $mysqli -> close();
    ?>