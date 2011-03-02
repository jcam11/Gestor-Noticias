<?php
  session_start();  
  if(!isset($_SESSION['logged']) && !$public_page){
      header('Location: /');
  }  
?>
