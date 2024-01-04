# SportCalendarChallenge

ERD

ID is used as the Primary Key for all tables.

Location

Contains basic location information for stadium locations and teams main facilities. 
Foreign Key and entity relations. The location table contained no foreign keys, however both the stadiums and teams tables are connected.

Stadiums

Contain stadium name data and location data.
Two name fields were used, the first being the corporate name of the stadium to allow for sponsorships. The second was the traditional name
of the stadium.

Teams

The teams table also has two names fields. The first being the shortened display name for the calendar, the second being the official name of the team.
A location for the team was provided as well as the teams home stadium, although the stadium also contains location data the stadium and club facilities
are not always located in the same arena, as such both sets of location data data are made available. An additional city field was included for clubs in 
which their main city is not indicated within their name or the location data (used for suburban teams to add the major city in which the team is situated)
The main sport played by the team was also included.

Calendar Entry

The main table for the display. Contains data on the sport, in the case of interdisciplinary games.
The home and away teams are also included as foreign keys.
The date and time are included separately for easier human interpretation, even though it requires an additional sort statement in the final sql query to 
display games in chronological order.
The stadium was also included in the calendar for cases when the home team was not playing at their main stadium.

Results

The results table was created to store the results of each game.
Although not required for the project, each calendar entry would be sent to the results section after completion.
The results table also stores the score of each team and the overall result of the game.
HomeWin = 0, AwayWin = 1, Draw = 2, Other = 3
