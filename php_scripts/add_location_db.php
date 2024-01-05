<?php
// require "database_connection.php";

    if (!defined('SERVER')) define('SERVER', "localhost");
    if (!defined('USERNAME')) define('USERNAME', "root");
    if (!defined('PASSWORD')) define("PASSWORD", "");
    if (!defined('DATABASE')) define("DATABASE", 'sportradarcalendarchallenge');
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    

    $street_number =  $_REQUEST['street_number'];
    $street_name = $_REQUEST['street_name'];
    $city =  $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $country = $_REQUEST['country'];
    $post_code = $_REQUEST['post_code'];

    settype($street_number, "integer");
    settype($post_code, "integer");
    // $mysqli -> dbConnect();
    $sql = "INSERT INTO locations VALUES
    (0, $street_number, '$street_name', '$city', '$state', '$country',  $post_code )";

    if ($mysqli -> query($sql) == TRUE) {
        echo "Successfully Added Event";?>
        <button onclick="location.href='../index.php'" type="button">Return to Calendar</button>"
        <?php
    } else {
        echo "Error:" . $sql . "<br>" . $mysqli->error;
    }

    $mysqli -> close();
    ?>