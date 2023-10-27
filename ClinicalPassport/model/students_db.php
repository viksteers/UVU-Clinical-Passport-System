<?php
require('database.php');

function get_students() {
   global $db;
   $query = 'SELECT StudentID, FirstName, LastName, Email, Address, City, State, Zip FROM students';
   $statement = $db->prepare($query);
   $statement->execute();
   $students = $statement->fetchAll();
   $statement->closeCursor();
   return $students;
}

function login($email, $password){
   global $db;
   $query = 'SELECT StudentID, FirstName, LastName, Email, Address, City, State, Zip FROM student WHERE Email = :email 
               AND Password = md5(:password)';
   $statement = $db->prepare($query);
   $statement->bindParam(':email', $email);
   $statement->bindParam(':password', $password);
   $statement->execute();
   $students = $statement->fetch(PDO::FETCH_BOTH);
   $statement->closeCursor();
   return $students;   
}
?>
