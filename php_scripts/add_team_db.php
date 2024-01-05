<?php
// require "database_connection.php";

    if (!defined('SERVER')) define('SERVER', "localhost");
    if (!defined('USERNAME')) define('USERNAME', "root");
    if (!defined('PASSWORD')) define("PASSWORD", "");
    if (!defined('DATABASE')) define("DATABASE", 'sportradarcalendarchallenge');
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    

    $display_name =  $_REQUEST['display_name'];
    $full_name = $_REQUEST['full_name'];
    $city =  $_REQUEST['city'];
    $location = $_REQUEST['location'];
    $stadium = $_REQUEST['stadium'];
    $contact = $_REQUEST['contact'];
    $sport = $_REQUEST['sport'];

    settype($location, "integer");
    settype($stadium, "integer");
    // $mysqli -> dbConnect();
    $sql = "INSERT INTO teams VALUES
    (0, '$display_name', '$full_name', '$city', $location, $stadium, '$contact', '$sport' )";

    if ($mysqli -> query($sql) == TRUE) {
        echo "Successfully Added Event";
    } else {
        echo "Error:" . $sql . "<br>" . $mysqli->error;
    }

    $mysqli -> close();
    ?>