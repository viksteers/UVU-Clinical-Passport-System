<?php
session_start();
require('../model/students_db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>UVU Clinical Passport Ranking</title>
</head>
<body>
<header>
    <img class="logo" src="/ClinicalPassport/images/UVU_logo.png" alt="Logo">
    <h1>UVU Clinical Passport Ranking</h1>
</header>
<div class="input-section">
    <div class="input-container">
        <label for="procedureIdInput">Procedure ID:</label>
        <input type="text" id="procedureIdInput" name="rankId">
    </div>

    <div class="input-container">
        <label for="studentIdInput">Student ID:</label>
        <input type="text" id="studentIdInput" name="studentId">
    </div>
</div>
<div>
    <h2>Ranking</h2>
    <div>
        <?php
        $rating = 0; // Default rating value
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["rating"])) {
                $rating = intval($_POST["rating"]);
            }
        }
        for ($i = 1; $i <= 5; $i++) {
            $starClass = ($i <= $rating) ? "filled" : "";
            echo '<span class="star ' . $starClass . '" onclick="submitRating(' . $i . ')">&#9734;</span>';
        }
        ?>
        <form id="ratingForm" method="POST" style="display: none;">
            <input type="hidden" name="rating" id="ratingInput">
        </form>
    </div>
    <br><br>
    <button type="submit" form="ratingForm">Submit</button>
<script>
        function submitRating(rating) {
            document.getElementById("ratingInput").value = rating;
            document.getElementById("ratingForm").submit();
        }
    </script>
</body>
</html>
<br><br>
<br><br>
<br><br>
<?php include '../view/footer.php'; ?>
