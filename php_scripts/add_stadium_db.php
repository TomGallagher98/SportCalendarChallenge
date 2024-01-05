<?php
// require "database_connection.php";

    if (!defined('SERVER')) define('SERVER', "localhost");
    if (!defined('USERNAME')) define('USERNAME', "root");
    if (!defined('PASSWORD')) define("PASSWORD", "");
    if (!defined('DATABASE')) define("DATABASE", 'sportradarcalendarchallenge');
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    

    $name =  $_REQUEST['display_name'];
    $base_name = $_REQUEST['base_name'];
    $location =  $_REQUEST['location'];

    settype($location, "integer");
    // $mysqli -> dbConnect();
    $sql = "INSERT INTO stadiums VALUES
    (0, '$name', '$base_name', $location )";

    if ($mysqli -> query($sql) == TRUE) {
        echo "Successfully Added Event";?>
        <button onclick="location.href='../index.php'" type="button">Return to Calendar</button>"
        <?php
    } else {
        echo "Error:" . $sql . "<br>" . $mysqli->error;
    }

    $mysqli -> close();
    ?>