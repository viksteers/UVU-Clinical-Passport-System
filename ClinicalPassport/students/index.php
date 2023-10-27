<?php
session_start();
require('../model/students_db.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <title> UVU Clinical Passport </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<center>
<img alt="logo" src="/ClinicalPassport/images/UVU_logo.png">
<H1>UVU Clinical Passport</H1>
<br>

<a href="/ClinicalPassport/students/student_information.php">
<button class="block">Student Information</button> </br>
</a>
</br>
<a href="/ClinicalPassport/students/ranking.php">
<button class="block">Ranking Page</button></br>
</a>
</br>
<a href="/ClinicalPassport/students/tracking.php">
<button class="block">Tracking</button></br>
</a>
</br>
<a href="/ClinicalPassport/students/message.php">
<button class="block">Messages</button></br>
</a>
</br>
</center>
</body>
</html>
<footer>
    <style>
        footer {
        text-align: center;
        margin-top: 300px;
        margin-bottom: 0px;
        }
    </style>
        <nav>
            <a href="/ClinicalPassport/logout.php">Logout</a>
        </nav>
        <p class="copyright">&copy; <?php echo date("Y"); ?> UVU Clinical Passport</p>
</footer>
