<?php
  session_start();
  if ( isset($_SESSION['id']) ) {
  }
  $errors='';
  $errors = filter_input(INPUT_GET,'errors');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>UVU Clinical Passport</title>
</head>
<center>
<header>
    <img class="logo" src="/ClinicalPassport/images/UVU_logo.png" alt="Logo">
    <h1>UVU Clinical Passport</h1>
</header>
</center>
<body>
<br/><br/>
<form action="/ClinicalPassport/students/index.php" method="post">
  Email: <input type="text" name="id" placeholder="UVU ID" size="10">
  Password: <input type="password" name="password" placeholder="Password" size="10">
  <input type="hidden" name="action" value="login"/>
  <input type="submit" value="Submit" />
  <div class="errors"><?=$errors?></div>
</form>
