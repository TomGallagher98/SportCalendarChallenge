<?php
require 'php_scripts/filter_sports.php';
$sports = getSports();
?>

<div>
    <h1>
        Add new event
    </h1>
         <form action="/php_scripts/add_event_db.php" method="post">
             
            <p>
               <label for="date">Date:</label>
               <input type="text" name="date" id="date" placeholder="yyyy-mm-dd">
            </p>
             
            <p>
               <label for="time">Time:</label>
               <input type="text" name="time" id="time" placeholder="HH:MM:SS">
            </p>
 
            <p>
               <label for="sport">Sport:</label>
               <input type="text" name="sport" id="sport", list=$sports>
            </p>
            
            <p>
               <label for="home_team">Home Team:</label>
               <input type="text" name="home_team" id="home_team" >
            </p>
            
            <p>
               <label for="away_team">Away Team:</label>
               <input type="text" name="away_team" id="away_team">
            </p>

            <p>
               <label for="venue">Venue:</label>
               <input type="text" name="venue" id="venue">
            </p>
 
            <input type="submit" value="Submit">
         </form>
</div>