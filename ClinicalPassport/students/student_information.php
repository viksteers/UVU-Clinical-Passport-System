<?php
session_start();
require('../model/students_db.php');
?>
<main>
   <section>
    <center>
    <img class="logo" src="/ClinicalPassport/images/UVU_logo.png" alt="Logo">
       <h1>Student Information</h1>
       <form action="/students/index.php" method="post">
            <input type="hidden" name="action" value="add_student_information"/>
            Student ID: <input type="text" name="student_id"> <br>
            First Name: <input type="text" name="first_name"> <br>
            Last Name: <input type="text" name="last_name"> <br>
            Email: <input type="text" name="email"> <br>
            Address: <input type="text" name="address"> <br>
            City: <input type="text" name="city"> <br>
            State: <input type="text" name="state"> <br>
            Zip Code: <input type="text" name="zip"> <br>
            <br>
            <input type="submit" value="Submit">
       </form>
   </section>
    </center>
</main>
<br><br>
<br><br>
<br><br>
<?php include '../view/footer.php'; ?>
