<?php
    // require database file in the model folder
    require_once(__DIR__ . "/../model/config.php");
    

     //create a table query
     //create a table to store information call post     
     $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
             . "id int(11) NOT NULL AUTO_INCREMENT,"
             . "title varchar(255) NOT NULL,"
             . "post text NOT NULL,"
             . "PRIMARY KEY (id))");
     
     // boolean value true or false
     if ($query){
         // table post already exist
         echo "<p>Successfully created table: posts</p>";
     }
     else {
         echo "<p>" .  $_SESSION["connection"]->error . "</p>";
     }
    
   
 