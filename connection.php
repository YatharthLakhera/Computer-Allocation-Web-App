<?php

   # Connecting to database----------- 

   $conn = mysqli_connect('localhost', 'root', 'dragon');

   if(! $conn ) {
     die('Could not connect: ' . mysqli_error($conn));
   }

   $db_name = "knsccf";   

   $query_select_db = mysqli_select_db($conn, $db_name);
   if (! $query_select_db) {
        die("Could not open $db_name database: ".mysqli_error($conn));
   }

?>