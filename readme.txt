Kurdish Readme:

Code is very complicated because it was not made my programmers :P

http://ku2en.com/

search feature is found in /new/db/
get_word.php is the autocomplete results feature when user searches
get_definition.php is how results are presented after a search

Add a word/Edit a Word/Create user is found in /new/
index.php is the add a word feature

sidebar feature can be found in /index.php (in root, not /new/)


Thats basically all the explanation I can think of The original website was just supposed to be a collection of html files
But has since been transformed to the mess you see :P

The main problem is with the search feature which wont search the English or Kurdish/Arabic script, only the Kurdish Latin.
Also the search should display results like this: "ho hatyawa?  Are you back?" but sometimes it only searches the kurdish or only the english.
There is also a problem with the side bar not properly outputting the Kurdish and arbitrarily selecting a user. I will try to fix this before you wake but I'm not having much like.

Sidebar can be found on index.php but I'll include a brief description and code below:
-----------------
When a user submits a definition
the word and kurdish equivalent goes into a table called "word_tbl" in "dictionary_db"
The definition goes into another table called "definition_tbl" in "dictionary"

Here is an example:
http://i.imgur.com/hmZBNXP.png ignore the english column. Notice the last entry, bread is ID 3549
http://i.imgur.com/9TEj7DV.png Here is the equivalent entry in definition_tbl. The same ID is present and so the word should display when bread is displayed on the sidebar

But my problem is that a word is displayed with the incorrect definition and incorrect submitted user. It seems to arbitrarily be selecting them.

-----------------

                                        <!-- start of sidebar -->
                <aside class="span4 page-sidebar" >

                                                <section class="widget">
                                                        <div id="randomWord" class="support-widget">
                                                        <center><h3>Random Word</h3></center><hr>
				
<?php
include("db_config.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT CONCAT( fname,  ' ', lname ) AS username, dt.definition, wt.kurdish_en, location
FROM definition_tbl dt, word_tbl wt, user_tbl u
WHERE wt.word_id = dt.word_id
ORDER BY RAND( ) 
LIMIT 0 , 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
//        echo  $row["definition"]. " -  " . $row["kurdish_en"]. "<br>";
        echo   '<h3 >'. $row["kurdish_en"].'</h3>';
        echo   '<p >'. $row["definition"].'</p>';
        echo    '<hr><p> Submitted by:<b> ' . $row["username"] . '</b>';
        echo    ',<b> ' . $row["location"] . '</b>';
    }
} else {
    echo "0 results";
}
?>
														
                                                                <!--- h3 class="title"></h3>
                                                                <p class="intro"></p -->
                                                        </div>
                                                        <div id="lastWord" class="support-widget">
                                                        <center><h3>Newest Entry</h3></center><hr>
  
<?php

$sql = "SELECT * 
FROM definition_tbl dt, word_tbl wt, user_tbl u
WHERE wt.word_id = dt.word_id
ORDER BY wt.word_id desc 
LIMIT 0 , 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
//  <h3 id="lastWordH1" class="title"></h3><p id="lastWordP1" class="intro"></p>
                                                                
     echo    '<h3 id="lastWordH1" class="title">'.mb_strtolower($row["kurdish_en"], 'UTF-8').'</h3>';
     echo    '<h3 id="lastWordH1" class="title">'.mb_strtolower($row["kurdish_ku"], 'UTF-8').'</h3>';

     
        echo   '<p id="lastWordP1" class="intro">'.mb_strtolower($row["definition"], 'UTF-8').'</p>';
        echo    '<hr><p> Submitted by:<b> ' . $row["username"] . '</b>';
        echo    ',<b> ' . $row["location"] . '</b>';
    }
} else {
    echo "0 results";
}
$conn->close();

?>
 
                                                        </div>
                                                </section>