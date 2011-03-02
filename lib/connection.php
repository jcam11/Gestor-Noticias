<?php

   function getConnection(){
      include("settings.php"); 

      $conn = mysql_connect($db_host, $db_user, $db_password);
      if(!$conn){
         die ("Could not connect to the database. ".mysql_error());
      }

      if(!mysql_select_db($db_database)){
         die ("Could not select to the database. ".mysql_error());
      }

     return $conn;
  }

?>
