<?php
   $dsn = 'mysql:host=localhost;dbname=clinical_passport';
   $username = 'phpuser';
   $password = 'pa55word';
  
   try {
       $db = new PDO($dsn, $username, $password);
   } catch (PDOException $e) {
       $error_message = $e->getMessage();
       echo 'Error Message ' . $error_message;
       exit();
   }
?>