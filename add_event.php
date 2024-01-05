<?php
require 'php_scripts/filter_sports.php';
$sports = getSports();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Add Stadium</title>
</head>

<body>
    <?php include "nav.php" ?>
    <main>
        <div class="left">
            <h1> Add new event </h1>
            <form action="/php_scripts/add_event_db.php" method="post">
                
                <p>
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" placeholder="yyyy-mm-dd">
                </p>
                
                <p>
                <label for="time">Time:</label>
                <input type="time" name="time" id="timeInput" placeholder="HH:MM:SS">
                </p>
    
                <p>
                <label for="sport">Sport:</label>
                <input type="text" name="sport" id="sport", list=$sports>
                </p>
                
                <p>
                <label for="home_team">Home Team:</label>
                <input type="number" name="home_team" id="home_team" placeholder="Enter Team ID" >
                </p>
                
                <p>
                <label for="away_team">Away Team:</label>
                <input type="number" name="away_team" id="away_team" placeholder="Enter Team ID">
                </p>

                <p>
                <label for="venue">Venue:</label>
                <input type="number" name="venue" id="venue" placeholder="Enter Venue ID">
                </p>
    
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="right">
            <?php include "data_lookup.php" ?>
        </div>
    </main>
</body>


<!-- https://www.techsoftechs.com/how-to-use-a-24-hour-time-format-input-field-in-html.html#:~:text=input%
20type%20time%2024%20hour%20format&text=To%20force%20the%2024%2Dhour,in%20the%20format%20hh%3Amm%20. -->
<script>
const timeInput = document.getElementById("timeInput");
timeInput.addEventListener("input", function () {
  const value = this.value.replace(/[^0-9]/g, "");
  if (value.length > 2) {
    this.value = value.slice(0, 2) + ":" + value.slice(2);
  }
});
</script>